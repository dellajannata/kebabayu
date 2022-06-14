@extends('admin.layout') @section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header"> Tambah Menu </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger"> <strong>Whoops!</strong> There were some problems with your
                            input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif <form method="post" action="{{ route('admin.store') }}" id="myForm"> @csrf <div
                                class="form-group"> <label for="id">Id</label> <input type="text" name="id"
                                    class="form-control" id="id" aria-describedby="id"> </div>
                            <div class="form-group"> <label for="gambar">Gambar</label> <input type="file" name="gambar"
                                    class="form-control" id="gambar" aria-describedby="gambar"> </div>
                            <div class="form-group"> <label for="nama_menu">Nama Menu</label> <input type="nama_menu"
                                    name="nama_menu" class="form-control" id="nama_menu" aria-describedby="nama_menu">
                            </div>
                            <div class="form-group"> <label for="harga">Harga</label>
                                <input type="harga" name="harga" class="form-control" id="harga"
                                    aria-describedby="password">
                            </div>
                            <div class="form-group"> <label for="stok">Stok</label> <input type="stok" name="stok"
                                    class="form-control" id="stok" aria-describedby="stok"> </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                </div>
            </div>
        </div>
</div> @endsection
