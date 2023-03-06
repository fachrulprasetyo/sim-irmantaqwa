@extends('layouts.master')

@section('konten')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">

            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{ session('sukses') }}
            </div>
            @endif

            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Surat Masuk</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Surat Masuk</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 class="card-title">Surat Masuk</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                                        + Tambah Data Surat Masuk
                                    </button>
                                </div>

                                <div class="col-md-4">
                                    <form method="GET">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4 col-form-label">
                                                Cari Data
                                            </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="cari" id="cari" class="form-control" placeholder="Cari Data Berdasarkan Perihal" autofocus="true" value="{{ $cari }}">
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>@sortablelink('no_surat','No. Surat')</th>
                                        <th>@sortablelink('tgl_surat', 'Tanggal Surat')</th>
                                        <th>@sortablelink('tgl_terima', 'Tanggal Terima')</th>
                                        <th>@sortablelink('asal_surat', 'Asal Surat')</th>
                                        <th>@sortablelink('perihal', 'Perihal')</th>
                                        <th>@sortablelink('penerima', 'Penerima')</th>
                                        <th>File Surat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $nomor = 1 + (($data_sm->currentPage()-1) * $data_sm->perPage());
                                    @endphp
                                    @foreach($data_sm as $sm)
                                    <tr>
                                        <td>{{ $nomor++ }}</td>
                                        <td>{{ $sm->no_surat }}</td>
                                        <td>{{ date('d-m-Y', strtotime($sm->tgl_surat)) }}</td>
                                        <td>{{ date('d-m-Y', strtotime($sm->tgl_terima)) }}</td>
                                        <td>{{ $sm->asal_surat }}</td>
                                        <td>{{ $sm->perihal }}</td>
                                        <td>{{ $sm->penerima }}</td>
                                        <td><a href="{{asset('file_upload_sm/'.$sm->file_surat)}}" class="btn btn-primary btn-sm" download="">Download File</a></td>
                                        <td>
                                            <a href="/surat_masuk/{{ $sm->id }}/edit" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a> ||
                                            <a href="/surat_masuk/{{ $sm->id }}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data surat perihal {{ $sm->perihal }} mau dihapus ?')"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="card-footer">
                            {!! $data_sm->appends(Request::except('page'))->render() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input Data Surat Masuk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/surat_masuk/create" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">No. Surat</label>
                                <input type="text" name="no_surat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tanggal Surat</label>
                                <input type="date" name="tgl_surat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tanggal Terima</label>
                                <input type="date" name="tgl_terima" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Asal Surat</label>
                        <input type="text" name="asal_surat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Perihal</label>
                        <input type="text" name="perihal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Penerima</label>
                        <input type="text" name="penerima" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">File Surat</label>
                        <input type="file" name="file_surat" class="form-control">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop