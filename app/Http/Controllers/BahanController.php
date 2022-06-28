<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use Illuminate\Http\Request;

class BahanController extends Controller
{
    
    public function index(Request $request)
    {
        //fungsi eloquent menampilkan data menggunakan paginaon
        $bahan = bahan::orderBy('id', 'asc')->paginate(5);
        return view('admin2.index', compact('bahan'));
        

    }
    public function create()
    {
        return view('admin2.create');
    }
    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([ 'nama_bahan' => 'required', 'harga' => 'required|numeric',
        'stok' => 'required|numeric', 'satuan' => 'required','masaberlaku' => 'required'
        ]);
        Bahan::create([
            'nama_bahan' => $request->nama_bahan,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'satuan' => $request->satuan,
            'masaberlaku' => $request->masaberlaku,
        ]);

        //jika data berhasil ditambahkan, akan kembali ke halaman utama 
        return redirect()->route('admin3.index')
        ->with('success', 'Bahan Berhasil Ditambahkan');
    }
    public function show($id)
    {
        //menampilkan detail data dengan menemukan/berdasarkan ... bahan
        $bahan = Bahan::find($id);
        return view('admin2.detail', compact('bahan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //menampilkan detail data dengan menemukan berdasarkan Nim bahan untuk diedit
        $bahan = Bahan::find($id);
        return view('admin2.edit', compact('bahan'));


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
        $bahan = Bahan::findOrFail($id);
        //melakukan validasi data
        $request->validate([ 'nama_bahan' => 'required', 'harga' => 'required|numeric',
        'stok' => 'required|numeric', 'satuan' => 'required','masaberlaku' => 'required'
        ]);

        //fungsi eloquent untuk menambah data 
        $bahan->update([
            'nama_bahan' => $request->nama_bahan,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'satuan' => $request->satuan,
            'masaberlaku' => $request->masaberlaku,
        ]);

        $bahan->save();
        //jika data berhasil diupdate, akan kembali ke halaman utama 
        return redirect()->route('admin3.index')
        ->with('Success', 'bahan Berhasil Diupdate');


    }

    public function destroy($id)
    {
        //fungsi eloquent untuk menghapus data 
        Bahan::find($id)->delete();
        return redirect()->route('admin3.index')
        -> with('success', 'Bahan Berhasil Dihapus');

    }
}
