@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menu</div>
                <div class="card-body">
                    <a href="menu/tambah" class="btn btn-primary">Input Menu Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($menu as $p)
                            <tr>
                                <td>{{ $p->name }}</td>
                                <td>{{ $p->harga }}</td>
                                <td>
                                    <a href="/menu/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/menu/hapus/{{ $p->id }}" class="btn btn-danger">Ubah Status</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection