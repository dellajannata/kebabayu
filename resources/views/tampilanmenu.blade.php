@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-12 mt-1">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Daftar Menu</li>
                </ol>
            </nav>
        </div>
        @foreach ($menus as $m)
            <div class="col-md-4" >
                <div class="card" >
                    <img width="10" height="250"  src="{{ asset('storage/'. $m->gambar) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $m->nama_menu }}</h5>
                        <p class="card-text"><strong>Stok :</strong> {{ $m->stok }}<br>
                        <strong>Harga :</strong> Rp. {{ $m->harga }}</p>
                        <a href="{{url('pesan')}}/{{$m->id}}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Pesan</a>
                    </div>
                </div>
            </div>
        @endforeach
        <br><br>
  
    </div>
</div>
@endsection