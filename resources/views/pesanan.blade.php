@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">pesanan</div>
                <div class="card-body">
                    <a href="pesanan/tambah" class="btn btn-primary">Input pesanan Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No. Pesanan</th>
                                <th>No. Meja</th>
                                <th>Menu</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pesanan as $p)
                            <tr>
                                <td>{{ $p->no_pesanan }}</td>
                                <td>{{ $p->no_meja }}</td>
                                <td>{{ $p->get_menu->name }}</td>
                                <td>
                                    <a href="/pesanan/edit/{{ $p->id }}" class="btn btn-warning">Tambah</a>
                                    <a href="/pesanan/close/{{ $p->id }}" class="btn btn-danger">Tutup</a>
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