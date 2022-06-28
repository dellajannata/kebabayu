@extends('admin.layout') @section('content') <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header"> Edit Data Bahan </div>
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
                    @endif
                    <form method="post" action="{{ route('admin3.update', $bahan->id) }}" id="myForm"
                        enctype="multipart/form-data">
                        @csrf @method('PUT')
                        <div class="form-group"> <label for="nama_bahan">Nama Bahan</label> <input type="nama_bahan"
                                name="nama_bahan" class="form-control" id="nama_bahan" value="{{ $bahan->nama_bahan }}"
                                aria-describedby="nama_bahan"> </div>
                        <div class="form-group"> <label for="stok">Stok</label> <input type="stok" name="stok"
                                class="form-control" id="stok" value="{{ $bahan->stok }}" aria-describedby="stok">
                        </div>
                        <div class="form-group"> <label for="satuan">Satuan</label> <input type="satuan" name="satuan"
                                class="form-control" id="satuan" value="{{ $bahan->satuan }}"
                                aria-describedby="satuan"> </div>
                        <div class="form-group"> <label for="harga">Harga</label> <input type="harga" name="harga"
                                class="form-control" id="harga" value="{{ $bahan->harga }}" aria-describedby="harga">
                        </div>
                        <div class="form-group"> <label for="masaberlaku">Masa Berlaku</label> <input type="date"
                                name="masaberlaku" class="form-control" id="masaberlaku" value="{{ $bahan->masaberlaku }}"
                                aria-describedby="masaberlaku">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
</div> @endsection
