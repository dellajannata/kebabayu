<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Pesanan;
use App\Models\User;
use App\Models\PesananDetails;
use Auth;
use Alert;
use App\Http\Middleware\Authenticate;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use DB;
use PharIo\Manifest\Author;


class PesanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function indexMenu($id)
    {
    	$menu = Menu::where('id', $id)->first();

    	return view('pesan.index', compact('menu'));
    }
    public function pesan(Request $request, $id)
    {	
    	$menu = Menu::where('id', $id)->first();
    	$tanggal = Carbon::now();

    	//validasi apakah melebihi stok
    	if($request->jumlah_pesan > $menu->stok)
    	{
    		return redirect('pesan/'.$id);
    	}

    	//cek validasi
    	$cek_pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
    	//simpan ke database pesanan
    	if(empty($cek_pesanan))
    	{
    		$pesanan = new Pesanan;
	    	$pesanan->user_id = Auth::user()->id;
	    	$pesanan->tanggal = $tanggal;
	    	$pesanan->status = 0;
	    	$pesanan->jumlah_harga = 0;
            $pesanan->kode = mt_rand(1000, 3000);
	    	$pesanan->save();
    	}
    	

    	//simpan ke database pesanan detail
    	$pesanan_baru = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();

    	//cek pesanan detail
    	$cek_pesanan_detail = PesananDetails::where('menu_id', $menu->id)->where('pesanan_id', $pesanan_baru->id)->first();
    	if(empty($cek_pesanan_detail))
    	{
    		$pesanan_detail = new PesananDetails;
	    	$pesanan_detail->menu_id = $menu->id;
	    	$pesanan_detail->pesanan_id = $pesanan_baru->id;
	    	$pesanan_detail->jumlah = $request->jumlah_pesan;
	    	$pesanan_detail->jumlah_harga = $menu->harga*$request->jumlah_pesan;
	    	$pesanan_detail->save();
    	}else 
    	{
    		$pesanan_detail = PesananDetails::where('menu_id', $menu->id)->where('pesanan_id', $pesanan_baru->id)->first();

    		$pesanan_detail->jumlah = $pesanan_detail->jumlah+$request->jumlah_pesan;

    		//harga sekarang
    		$harga_pesanan_detail_baru = $menu->harga*$request->jumlah_pesan;
	    	$pesanan_detail->jumlah_harga = $pesanan_detail->jumlah_harga+$harga_pesanan_detail_baru;
	    	$pesanan_detail->update();
    	}

    	//jumlah total
    	$pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
    	$pesanan->jumlah_harga = $pesanan->jumlah_harga+$menu->harga*$request->jumlah_pesan;
    	$pesanan->update();
        
        Alert()->success('Pesanan Sukses Masuk Keranjang','Success');
    	return redirect('check-out');

    }

    public function check_out()
    {
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
 	    $pesanan_details = [];
        if(!empty($pesanan))
        {
            $pesanan_details = PesananDetails::where('pesanan_id', $pesanan->id)->get();

        }
        
        return view('pesan.check_out', compact('pesanan', 'pesanan_details'));
    }

    public function delete($id)
    {
        $pesanan_detail = PesananDetails::where('id', $id)->first();

        $pesanan = Pesanan::where('id', $pesanan_detail->pesanan_id)->first();
        $pesanan->jumlah_harga = $pesanan->jumlah_harga-$pesanan_detail->jumlah_harga;
        $pesanan->update();


        $pesanan_detail->delete();

        Alert()->success('Pesanan Sukses Dihapus','Success');
        return redirect('check-out');
    }

    public function konfirmasi()
    {
        $user = User::where('id', Auth::user()->id)->first();

        if(empty($user->alamat))
        {
            alert()->error('Pesanan Sukses Dihapus','Error');
            return redirect('profile');
        }

        if(empty($user->nohp))
        {
            alert()->error('Identitasi Harap dilengkapi', 'Error');
            return redirect('profile');
        }

        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        $pesanan_id = $pesanan->id;
        $pesanan->status = 1;
        $pesanan->update();

        $pesanan_details = PesananDetails::where('pesanan_id', $pesanan_id)->get();
        foreach ($pesanan_details as $pesanan_detail) {
            $menu = menu::where('id', $pesanan_detail->menu_id)->first();
            $menu->stok = $menu->stok-$pesanan_detail->jumlah;
            $menu->update();
        }

        alert()->success('Pesanan Sukses Check Out Silahkan Lanjutkan Proses Pembayaran', 'Success');
        return redirect('history/');

    }

    // Untuk halaman admin

    public function index(Request $request)
    {
        //fungsi eloquent menampilkan data menggunakan paginaon
        $menu = Menu::orderBy('id', 'asc')->paginate(5);
        return view('admin.halamanutama', compact('menu'));
        

    }
    public function create()
    {
        return view('admin.createmenu');
    }
    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([ 'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 'nama_menu' => 'required', 'harga' => 'required',
        'stok' => 'required', 
        ]);
        $gambar = $request->file('gambar')->store('images', 'public');
        //fungsi eloquent untuk menambah data 
        Menu::create([
            'nama_menu' => $request->nama_menu,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'gambar' => $gambar
        ]);

        //jika data berhasil ditambahkan, akan kembali ke halaman utama 
        return redirect()->route('admin.index')
        ->with('success', 'Menu Berhasil Ditambahkan');
    }
    public function show($id)
    {
        //menampilkan detail data dengan menemukan/berdasarkan ... Menu
        $menu = Menu::find($id);
        return view('admin.detailmenu', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //menampilkan detail data dengan menemukan berdasarkan Nim Menu untuk diedit
        $menu = Menu::find($id);
        return view('admin.editmenu', compact('menu'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);
        //melakukan validasi data
        $request->validate([ 'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 'nama_menu' => 'required', 'harga' => 'required',
        'stok' => 'required', 
        ]);

        //fungsi eloquent untuk mengupdate data inputan kita 
        $gambar = $request->file('gambar')->store('images', 'public');
        //fungsi eloquent untuk menambah data 
        $menu->update([
            'nama_menu' => $request->nama_menu,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'gambar' => $gambar
        ]);
        $menu->save();
        //jika data berhasil diupdate, akan kembali ke halaman utama 
        return redirect()->route('admin.index')
        ->with('success', 'Menu Berhasil Diupdate');


    }

    public function destroy($id)
    {
        //fungsi eloquent untuk menghapus data 
        Menu::find($id)->delete();
        return redirect()->route('admin.index')
        -> with('success', 'Menu Berhasil Dihapus');

    }
    public function grafik()
    {
        
    }
}
?>