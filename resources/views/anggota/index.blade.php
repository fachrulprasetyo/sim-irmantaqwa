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
                    <h1>Anggota</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Anggota</li>
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
                            <h3 class="card-title">Data Anggota</h3>
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
                                        + Tambah Data
                                    </button>
                                </div>

                                <div class="col-md-4">
                                    <form method="GET">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4 col-form-label">
                                                Cari Data
                                            </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="cari" id="cari" class="form-control" placeholder="Cari Data Berdasarkan Nama" autofocus="true" value="{{ $cari }}">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>@sortablelink('nama','Nama Lengkap')</th>
                                        <th>@sortablelink('jenis_kelamin', 'Jenis Kelamin')</th>
                                        <th>@sortablelink('tempat_lahir', 'Tempat Lahir')</th>
                                        <th>@sortablelink('tgl_lahir', 'Tanggal Lahir')</th>
                                        <th>@sortablelink('alamat', 'alamat')</th>
                                        <th>No. Telp</th>
                                        <th>Poto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $nomor = 1 + (($data_anggota->currentPage()-1) * $data_anggota->perPage());
                                    @endphp
                                    @foreach($data_anggota as $anggota)
                                    <tr>
                                        <td>{{ $nomor++ }}</td>
                                        <td>{{ $anggota->nama }}</td>
                                        <td>{{ $anggota->jenis_kelamin }}</td>
                                        <td>{{ $anggota->tempat_lahir }}</td>
                                        <td>{{ date('d-m-Y', strtotime($anggota->tgl_lahir)) }}</td>
                                        <td>{{ $anggota->alamat }}</td>
                                        <td>{{ $anggota->no_telp }}</td>
                                        <td><img src="{{asset('image/'.$anggota->avatar)}}" alt="" width="50"></td>
                                        <td>
                                            <a href="/anggota/{{ $anggota->id }}/profile" class="btn btn-info btn-sm"><i class="far fa-eye"></i></a> ||
                                            <a href="/anggota/{{ $anggota->id }}/edit" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a> ||
                                            <a href="/anggota/{{ $anggota->id }}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data {{ $anggota->nama }} mau dihapus ?')"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="card-footer">
                            {!! $data_anggota->appends(Request::except('page'))->render() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Modal Untuk Create Data-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input Data Anggota</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/anggota/create" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="custom-select" name="jenis_kelamin">
                            <option selected>-Pilih-</option>
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                <textarea class="form-control" name="alamat" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">No. Telp</label>
                                <input type="text" name="no_telp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Upload Poto</label>
                        <input type="file" name="avatar" class="form-control">
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