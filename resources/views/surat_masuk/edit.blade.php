@extends('layouts.master')

@section('konten')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Data Surat Masuk</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Edit Data Surat Masuk</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 class="card-title">Edit Data Surat Masuk</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>

                        <div class="card-body">
                            <form action="/surat_masuk/{{ $surat_masuk->id }}/update" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-4">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">No. Surat</label>
                                            <input type="text" name="no_surat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $surat_masuk->no_surat }}">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Tanggal Surat</label>
                                            <input type="date" name="tgl_surat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $surat_masuk->tgl_surat }}">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Tanggal Terima</label>
                                            <input type="date" name="tgl_terima" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $surat_masuk->tgl_terima }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Asal Surat</label>
                                    <input type="text" name="asal_surat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $surat_masuk->asal_surat }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Perihal</label>
                                    <input type="text" name="perihal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $surat_masuk->perihal }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Penerima</label>
                                    <input type="text" name="penerima" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $surat_masuk->penerima }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">File Surat</label>
                                    <input type="file" name="file_surat" class="form-control">
                                </div>

                                <button type="submit" class="btn btn-warning">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop