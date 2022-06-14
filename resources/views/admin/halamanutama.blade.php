@extends('admin.layout')
 @section('content')
 
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-center mt-2">
                <Center>Daftar Menu Kebab Ayu</Center>
            </div>
            <br>
            <div class="float-right my-2"> <a class="btn btn-success" href="{{ route('admin.create') }}"> Input
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
                <th>Gambar</th>
                <th>Nama Menu</th>
                <th>Harga</th>
                <th>Stok</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($menu as $m)
                <tr>
                    <td>{{ $m->id }}</td>
                    <td width="10" height="100"  src="{{ url('images') }}/{{ $m->gambar }}" ></td>
                    <td>{{ $m->nama_menu }}</td>
                    <td>{{ $m->harga }}</td>
                    <td>{{ $m->stok }}</td>
                    <td>
                        <form action="{{ route('admin.destroy', $m->id) }}" method="POST"> <a
                                class="btn btn-info" href="{{ route('admin.show', $m->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('admin.edit', $m->id) }}">Edit</a>
                            @csrf
                             @method('DELETE') <button type="submit" class="btn btn-danger">Delete</button> </form>
                    </td>
                </tr>
            @endforeach 
        </table>
        <br>
        {{$menu->links()}}
    @endsection