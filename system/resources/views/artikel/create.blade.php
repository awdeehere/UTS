@extends('admin.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Artikel
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/artikel') }}" method="post">
                            @csrf
                            <div class="form-grup">
                                <label for="" class="control-label">Judul</label>
                                <input type="text" class="form-control" name="judul">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Penulis</label>
                                <input type="text" class="form-control" name="penulis">
                            </div>
                            <div class="form-grup">
                                <label for="" class="control-label">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control"></textarea>
                            </div>
                            <button class="btn btn-dark float-right mt-3"><i class="fa fa-save"> Simpan</i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
