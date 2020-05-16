@extends('indexmaster')
@section('title')
@extends('layouts.app')
@section('kontenluas')
<h3>Detail Surat</h3>
<hr>
<table class="table table-bordered">
    <thead class="thead-dark">
        <th>Kode Surat</th>
        <th>Nomor Instansi</th>
        <th>No Agenda</th>
        <th>Isi Ringkasan</th>
        <th>No_Surat</th>
        <th>Tanggal Surat</th>
        <th>Tanggal Diterima</th>
        <th>Penerima</th>
    </thead>
    <tbody>
        @foreach($surat as $srt)
        <tr>
            <td>{{ $srt['kode_surat'] }}</td>
            <td>{{ $srt['nomor_instansi'] }}</td>
            <td>{{ $srt['no_agenda'] }}</td>
            <td>{{ $srt['isi_ringkasan'] }}</td>
            <td>{{ $srt['no_surat'] }}</td>
            <td>{{ $srt['tgl_surat'] }}</td>
            <td>{{ $srt['tgl_diterima'] }}</td>
            <td>{{ $srt['penerima'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection