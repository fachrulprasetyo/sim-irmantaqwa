@extends('layouts.master')

@section('konten')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Data Surat Keluar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Edit Data Surat Keluar</li>
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
                            <h3 class="card-title">Edit Data Surat Keluar</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>

                        <div class="card-body">
                            <form action="/surat_keluar/{{ $surat_keluar->id }}/update" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">No. Surat</label>
                                    <input type="text" name="no_surat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $surat_keluar->no_surat }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tanggal Surat</label>
                                    <input type="date" name="tgl_surat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $surat_keluar->tgl_surat }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tujuan Surat</label>
                                    <input type="text" name="tujuan_surat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $surat_keluar->tujuan_surat }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Perihal</label>
                                    <input type="text" name="perihal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $surat_keluar->perihal }}">
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