@extends('layouts.master')

@section('konten')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <h1>Dashboard</h1>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="callout callout-info">
                <h5><i class="fas fa-sign-language"></i> Assalamu'alaikum Warohmatullahi Wabarokatuh</h5>
                <p>Hallo {{ auth()->user()->name }} sebagai Admin, Selamat Datang di <b>Website Sistem Informasi Manajemen IRMANTAQWA</b></p>
            </div>

            <!--Card Info-->
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="far fa-user"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Anggota</span>
                            <span class="info-box-number">{{ $anggota }} Anggota</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-success"><i class="far fa-envelope"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Surat Masuk</span>
                            <span class="info-box-number">{{ $data_sm }} Berkas</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-warning"><i class="fa fa-envelope-open-text"></i></span>
                        <div class=" info-box-content">
                            <span class="info-box-text">Surat Keluar</span>
                            <span class="info-box-number">{{ $data_sk }} Berkas</span>
                        </div>
                    </div>
                </div>
            </div>
            <!--Akhir Card Info-->
        </div>


    </section>
</div>


@stop