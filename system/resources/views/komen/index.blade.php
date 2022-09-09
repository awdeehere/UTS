@extends('admin.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Komentar
                    </div>
                    <div class="card-body">
                        <table class="table table-datatable">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama</th>
                                <th>Waktu</th>
                                <th>Isi</th>
                            </thead>
                            <tbody>
                                @foreach ($list_komen as $komen)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url('admin/komen', $komen->id) }}" class="btn btn-dark">
                                                    <i class="fa fa-comment"></i>
                                                </a>
                                                @include('admin.utils.delete', [
                                                    'url' => url('admin/komen', $komen->id),
                                                ])
                                            </div>
                                        </td>
                                        <td>{{ $komen->nama }}</td>
                                        <td>{{ $komen->isi }}</td>
                                        <td>{{ $komen->created_at->diffForHumans()}}</td>
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
