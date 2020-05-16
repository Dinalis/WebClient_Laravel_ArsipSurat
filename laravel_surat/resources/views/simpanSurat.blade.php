@extends('layouts.appuser')

@section('kontenluas')
<div class="card">
    <h5 class="card-header" style="background-color: #3490dc ;color:white">Data Sukses Ditambahkan</h5>
    <div class="card-body">
        <h5 class="card-title">{{ $data->kode_surat }}</h5>
        <p class="card-text">

            <b>Nomor Instansi : </b>{{ $data->nomor_instansi }} <br>
            <b>Nomor Agenda : </b>{{ $data->nomor_agenda }} <br>
            <b>Isi Ringkasan : </b> {{ $data->isi_ringkasan }} <br>
            <b>No Surat : </b> {{ $data->no_surat }} <br>
            <b>Tgl Surat : </b> {{ $data->tgl_surat }} <br>
            <b>Tgl Diterima : </b> {{ $data->tgl_diterima }} <br>
            <b>Penerima : </b> {{ $data->penerima }} <br>
        </p>
        <a href="/surat" class="btn btn-primary">Kembali ke Daftar Surat</a>
    </div>
</div>
@endsection