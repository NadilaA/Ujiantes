@extends('layouts.app')

@section('content')
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Pesanan</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <strong>TAMBAH DATA</strong>
                </div>
                <div class="card-body">
                    <a href="/pesanan" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/pesanan/store">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>No. Pesanan</label>
                            <input type="text" name="no_pesanan" class="form-control" placeholder="No. pesanan ..">

                            @if($errors->has('no_pesanan'))
                                <div class="text-danger">
                                    {{ $errors->first('no_pesanan')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>No. Meja</label>
                            <textarea name="no_meja" class="form-control" placeholder="No. Meja .."></textarea>

                             @if($errors->has('no_meja'))
                                <div class="text-danger">
                                    {{ $errors->first('no_meja')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Menu</label>
                            <textarea name="id_menu" class="form-control" placeholder="Menu .."></textarea>

                             @if($errors->has('id_menu'))
                                <div class="text-danger">
                                    {{ $errors->first('id_menu')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </body>
</html>
@endsection