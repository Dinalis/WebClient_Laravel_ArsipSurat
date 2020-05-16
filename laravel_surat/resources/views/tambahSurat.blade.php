@extends('layouts.appuser')


@section('kontenluas')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="h5afE3niqayRvJqXsJ0NrYehPOgJYOFaYYD8PCIO">

    <title>ARSIP</title>

    <!-- Scripts -->
    <script src="http://localhost:8000/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="http://localhost:8000/css/app.css" rel="stylesheet">
</head>



<div class="col-md-9">
    <h3>Tambah Data Surat masuk</h3>
    <hr>
    <form action="/surat/tambahSurat" method="POST">
        <input type="hidden" name="_token" value="14HfuholtM9GfIV2fetQpswjAQXNyAoSEAvfPxy8">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Nomor Instansi</label>
            <select class="form-control" name="kode_surat" required>
                <optgroup label="Pilih Instansi">
                    <option value="110">Polsek Malang</option>
                    <option value="112">Polsek Kabupaten Malang</option>
                    <option value="113">Polinema</option>
                    <option value="115">Polsek Soehat</option>
                </optgroup>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nomor Agenda</label>
            <input type="text" class="form-control" name="nomor_agenda" required placeholder="Masukan Nomor Agenda">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Isi Ringkasan</label>
            <input type="text" class="form-control" name="isi_ringkasan" required placeholder="Masukan Isi Ringkasan ">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nomor Surat</label>
            <input type="text" class="form-control" name="no_surat" required placeholder="Masukan Nomor Surat">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Surat</label>
            <input type="text" class="form-control" name="tgl_surat" required placeholder="Masukan Tanggal Surat">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Ditermia</label>
            <input type="text" class="form-control" name="tgl_diterima" required placeholder="Masukan tgl diterima">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Penerima</label>
            <input type="text" class="form-control" name="penerima" required placeholder="Masukan penerima">
        </div>
        <input type="submit" value="Daftarkan Surat" class="btn btn-primary">
    </form>
</div>
</div>
</div>
</body>