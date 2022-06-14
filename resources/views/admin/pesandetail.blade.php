@extends('admin.layout') @section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header"> Detail Transaksi </div>
                <div class="card-body">
                    @if(!empty($pesanan))
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Id: </b>{{ $pesanan->id }}</li>
                        <li class="list-group-item"><b>Tanggal: </b>{{ $pesanan->tanggal }}</li>
                        <li class="list-group-item"><b>Status: </b>{{ $pesanan->status }}</li>
                        <li class="list-group-item"><b>Gambar: </b><img
                                src="{{ url('images') }}/{{ $pesanan_details->menu->gambar }}" width="100" alt="...">
                        </li>
                        <li class="list-group-item"><b>Nama Menu: </b> {{ $pesanan_details->menu->nama_menu }}/li>
                        <li class="list-group-item"><b>Jumlah: </b>{{ $pesanan_details->jumlah }}/li>
                        <li class="list-group-item"><b>Harga: </b>Rp.
                            {{ number_format($pesanan_details->menu->harga) }}/li>
                        <li class="list-group-item"><b>Jumlah Harga: </b>{{ $pesanan->jumlah_harga }}</li>
                    </ul>
                    @endif
                </div> <a class="btn btn-success mt-3" href="{{ route('admin.index') }}">Kembali</a>
            </div>
        </div>

@endsection
