@extends('admin.layout')
 @section('content')

 <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-center mt-2">
            <Center>DATA BAHAN</Center>
        </div>
        <br>
        <div class="float-right my-2"> <a class="btn btn-success" href="{{ route('admin3.create') }}"> Input
                Data</a>
</div> 
 @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif 
    <table class="table table-striped table-hover">
        <tr>
            <th>Id</th>
            <th>Nama Bahan</th>
            <th>Stok</th>
            <th>Satuan</th>
            <th>Harga</th>
            <th>Masa Berlaku</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($bahan as $b)
            <tr>
                <td>{{ $b->id}}</td>
                <td>{{ $b->nama_bahan }}</td> 
                <td>{{ $b->stok }}</td>
                <td>{{ $b->satuan }}</td>
                <td>{{ $b->harga }}</td>
                <td>{{ $b->masaberlaku }}</td>
                <td>
                    <form action="{{ route('admin3.destroy', $b->id) }}" method="POST"> <a
                            class="btn btn-primary" href="{{ route('admin3.edit', $b->id) }}">Edit</a>
                            <a class="btn btn-info" href="{{ route('admin3.show', $b->id) }}">Show</a>
                        @csrf
                         @method('DELETE') <button type="submit" class="btn btn-danger"
                         onclick="return confirm('Anda yakin akan menghapus data ?');">Delete</button> </form>
                </td>
            </tr>
        @endforeach 
    </table>
    <br>
    <br>
    {{$bahan -> links()}}
@endsection