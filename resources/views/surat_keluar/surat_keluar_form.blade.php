@extends('layouts.master')

@section('konten')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Cetak Surat Keluar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Cetak Surat Keluar</li>
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
                            <h3 class="card-title">Cetak Data Surat Keluar Per-tanggal</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tanggal Awal</label>
                                <input type="date" name="tgl_awal" id="tgl_awal" class="form-control" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tanggal Akhir</label>
                                <input type="date" name="tgl_akhir" id="tgl_akhir" class="form-control" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <a href="" onclick="this.href='/laporan/surat_keluar/cetak_data_pertanggal/'+document.getElementById('tgl_awal').value +
                                '/' + document.getElementById('tgl_akhir').value" target="_blank" class="btn btn-primary">
                                    <i class="fas fa-print"></i> Cetak Data Surat Keluar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop