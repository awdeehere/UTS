@extends('admin.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        Detail Data Artikel
                    </div>
                    <div class="card-body">
                        <h4>{{ $artikel->judul }}</h4>
                        <hr>
                        <p>
                            Penulis : {{ $artikel->penulis}}
                        </p>
                        <p>
                            {!! nl2br($artikel->deskripsi) !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
