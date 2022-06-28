@extends('admin.layout') @section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header"> Detail bahan </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Id: </b>{{ $bahan->id }}</li>
                        <li class="list-group-item"><b>Nama Bahan: </b>{{ $bahan->nama_bahan }}</li>
                        <li class="list-group-item"><b>Stok: </b>{{ $bahan->stok }}</li>
                        <li class="list-group-item"><b>Satuan: </b>{{ $bahan->satuan }}</li>
                        <li class="list-group-item"><b>Harga: </b>{{ $bahan->harga}}</li>
                        <li class="list-group-item"><b>Masa Berlaku: </b>{{ $bahan->masaberlaku}}</li>
                    </ul>
                </div> <a class="btn btn-success mt-3" href="{{ route('admin3.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection