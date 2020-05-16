@extends('indexmaster')
@section('title')
@extends('layouts.app')

@section('kontenluas')
<div class="col-md-12" style="width: 500%; height:auto;">
    <h3>Surat Masuk</h3>
    <!-- <a href="/surat/tambahSurat" class="btn btn-primary">Tambah</a> -->
    <hr>
    <table class="table table-bordered" id="listSekolah">
        <thead class="thead-dark">
            <tr>
                <th>Kode Surat</th>
                <th>No Agenda</th>
                <th>Isi Ringkasan</th>
                <th>No_Surat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($surat as $srt)
            <tr>

                <td>{{ $srt['kode_surat'] }}</td>
                <td>{{ $srt['no_agenda'] }}</td>
                <td>{{ $srt['isi_ringkasan'] }}</td>
                <td>{{ $srt['no_surat'] }}</td>
                <td>
                    <a href="/detailSurat/{{ $srt['kode_surat'] }}" class="badge badge-info">Detail</a>
                    <a href="/userDeleteSurat/{{ $srt['kode_surat'] }}" onclick="return confirm('Apakah Anda Ingin Menghapus {{ $srt['no_agenda'] }}?');" class="badge badge-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection