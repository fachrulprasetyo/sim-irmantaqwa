@extends('layouts.master')

@section('konten')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Informasi Aplikasi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Informasi Aplikasi</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Pengembang Aplikasi</h4>
                            <div style="text-align: center;">
                                <img class="img-thumbnail" alt="200x200" style="width: 200px;" src="{{ asset('image/pas_foto.jpg') }}" data-holder-rendered="true">
                                <p>
                                    Nama Pengembang <br />
                                    <strong>Fachrul Prasetyo</strong><br />
                                    Alamat <br />
                                    <strong>Kota Tangerang, Banten</strong><br />
                                    Email <br />
                                    <strong>fachrulprasetyo98@gmail.com</strong>
                                </p>
                            </div>
                            <hr />
                            <p>
                                <i>Aplikasi ini membantu untuk memecahkan suatu masalah organisasi, yang dimana
                                    organisasi tersebut masih manual belum menggunakan sistem informasi berbasis
                                    teknologi informasi. Dengan adanya <b>"Sistem Informasi Manajemen IRMANTAQWA Berbasis Website"</b>
                                    memudahkan seorang user untuk mengelola data organisasi tersebut.</i>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@stop