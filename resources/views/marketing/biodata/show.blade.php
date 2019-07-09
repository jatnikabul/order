@extends('marketing.front')
@section('content')
<br>
<h5>Detail Customer</h5>
<br>
<table cellpadding="10" class="table-striped">
<tr>
    <td>Nama Lengkap</td>
    <td>:</td>
    <td>{{ $biodata['nama'] }}</td>
</tr>
<tr>
    <td>Tempat, Tanggal Lahir</td>
    <td>:</td>
    <td>{{ $biodata['tempat'] }}, {{ date('d-M-Y', strtotime($biodata['tanggal_lahir'])) }}</td>
</tr>
<tr>
    <td>Alamat</td>
    <td>:</td>
    <td>{{ $biodata['alamat'] }}</td>
</tr>
<tr>
    <td>Nama Instansi</td>
    <td>:</td>
    <td>{{ $biodata['nama_instansi'] }}</td>
</tr>
<tr>
    <td>Jabatan</td>
    <td>:</td>
    <td>{{ $biodata['jabatan'] }}</td>
</tr>
<tr>
    <td>Email</td>
    <td>:</td>
    <td>{{ $biodata['email'] }}</td>
</tr>
<tr>
    <td>Telepon</td>
    <td>:</td>
    <td>{{ $biodata['telepon'] }}</td>
</tr>
<tr>
    <td>Tanggal</td>
    <td>:</td>
    <td>{{ date('d-M-Y', strtotime($biodata['tanggal'])) }}</td>
</tr>
</table>
@endsection