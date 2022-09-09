@extends('frontview.base')

@section('client_content')
    <article class="mb-6">
        <div class="container px-6 px-lg-5">
            <div class="row gx-6 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <h1>{{ $artikel->judul }}</h1>
                    <hr>
                    <strong> Penulis : {{ $artikel->penulis }}</strong>
                    <p>
                        {{ $artikel->deskripsi }}
                    </p>
                    <hr>
                </div>
            </div>
        </div>
    </article>
    <div class="container">
        <form action="" method="POST">
            @csrf
            <div class="form-group">
                <label for="" class="control-label"><strong> Nama</strong></label>
                <input type="text" class="form-control" name="nama">
            </div>
            <div class="form-group">
                <label for="" class="control-label">
                    <strong>Komentar</strong> :
                </label>
                <br>
                <textarea name="isi" name="" id="" cols="30" rows="10" class="form-control">

                                </textarea>
            </div>

            <br>
            <button style="float: right" class="btn btn-dark"><i class="fa fa-save"></i>
                Post Komentar</button>
        </form>

        <br>
        <br>
        <br>
        <br>
        <hr>
        <div>
            <h1>Komentar Netizen</h1>
            <hr>
            @foreach ($list_komen as $komen)
                <div class=" form-group">
                    <p>
                    <h4>{{ $komen->nama }}</h4>
                    <p>{{ $komen->created_at->diffForHumans() }}</p>
                    <p>{{ $komen->isi }}</p>
                    </p>

                </div>
                <hr>
            @endforeach
        </div>

    </div>
@endsection
