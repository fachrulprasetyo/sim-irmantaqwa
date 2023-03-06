<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cetak Data Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <center>
        <div class="content">
            <div class="container">

                <div class="col-12">
                    <div class="kop-surat">
                        <table>
                            <tr>
                                <td><img src="{{asset('image/logo.png')}}" width="120"></td>
                                <td>
                                    <center>
                                        <font size="8"><b>IRMANTAQWA</b></font><br>
                                        <font size="4"><b>(Ikatan Remaja Islam Masjid Jami' Nurut Taqwa)</b></font><br>
                                        <font size="3"><b>Sekretariat:</b> Jl. H. Mean Raya Kel. Karang Timur, Kec. Karang Tengah</font><br>
                                        <font>Kota Tangerang, Banten 15157</font><br>
                                        <font>Telp: 089637545881, 089623356381</font>
                                    </center>
                                </td>
                            </tr>
                        </table>
                        <table width="100%" class="mt-2">
                            <tr>
                                <td colspan=" 3" align="center">
                                    <hr size="5" color="black" style="margin:0px;margin-bottom:1px;">
                                    <hr size="2" color="black" style="margin:0px;">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!--TABEL ISI DATA-->
                <h3 class="mt-3">Laporan Data Anggota IRMANTAQWA</h3>
                <br>

                <div class="col-12">
                    <table class="table table-bordered table-striped datatable">
                        <tr align="center">
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>No. Telp</th>
                        </tr>
                        @foreach($data_cetak_anggota as $item)
                        <tr>
                            <td>{{ $loop-> iteration}}</td>
                            <td>{{ $item-> nama}}</td>
                            <td>{{ $item-> jenis_kelamin}}</td>
                            <td>{{ $item-> tempat_lahir}}</td>
                            <td>{{ date('d-m-Y', strtotime($item-> tgl_lahir)) }}</td>
                            <td>{{ $item-> alamat}}</td>
                            <td>{{ $item-> no_telp}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>

            <div class="container text-center mt-4">
                <div class="row">
                    <div class="col ketua">
                        <br><br><br>
                        Ketua IRMANTAQWA <br>
                        <br><br><br>
                        <p><b>Krisna Wijaya Kusuma</b></p>
                    </div>
                    <div class="col pembina">
                        <br><br><br><br><br><br><br><br>
                        Mengetahui, <br>
                        Pembina IRMANTAQWA <br>
                        <br><br><br>
                        <p><b>Daeng Yusuf Lasinala</b></p>
                    </div>
                    <div class="col sekretaris">
                        Karang Timur, {{ Date('d-m-Y') }} <br><br>
                        Hormat Kami, <br>
                        Sekretaris <br>
                        <br><br><br>
                        <p><b>Alya Nadra Zakiya</b></p>
                    </div>
                </div>
            </div>
        </div>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script type="text/javascript">
        window.print();
    </script>

</body>

</html>