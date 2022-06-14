@extends('admin.layout') @section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header"> Detail Menu </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Id: </b>{{ $menu->id }}</li>
                        <li class="list-group-item"><b>Gambar: </b><img width="150" height="100"  src="{{ url('images') }}/{{ $menu->gambar }}"></li>
                        <li class="list-group-item"><b>Nama Menu: </b>{{ $menu->nama_menu }}</li>
                        <li class="list-group-item"><b>Harga: </b>{{ $menu->harga }}</li>
                        <li class="list-group-item"><b>Stok: </b>{{ $menu->stok }}</li>
                    </ul>
                </div> <a class="btn btn-success mt-3" href="{{ route('admin.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection