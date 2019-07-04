@extends('marketing.front')
@section('content')
<br>
<h5>Detail POM</h5>
<br>
<table cellpadding="10" class="table-striped">
<tr>
    <td>Nama Proyek</td>
    <td>:</td>
    <td>{{ $pom['nama_proyek'] }}</td>
</tr>
<tr>
    <td>Programmer Proyek</td>
    <td>:</td>
    <td>{{ $pom['programmer_proyek'] }}</td>
</tr>
<tr>
    <td>Perihal</td>
    <td>:</td>
    <td>{{ $pom['perihal'] }}</td>
</tr>
<tr>
    <td>Peserta Rapat</td>
    <td>:</td>
    <td>{{ $pom['peserta_rapat'] }}</td>
</tr>
<tr>
    <td>Lokasi Rapat</td>
    <td>:</td>
    <td>{{ $pom['lokasi_rapat'] }}</td>
</tr>
<tr>
    <td>Dibuat Oleh</td>
    <td>:</td>
    <td>{{ $pom['lr_dibuat_oleh'] }}</td>
</tr>
<tr>
    <td>Tanggal</td>
    <td>:</td>
    <td>{{ $pom['tanggal'] }}</td>
</tr>
<tr>
    <td>Diskusi</td>
    <td>:</td>
    <td>{{ $pom['diskusi'] }}</td>
</tr>
<tr>
    <td>Rencana Kegiatan</td>
    <td>:</td>
    <td>{{ $pom['rencana_kegiatan'] }}</td>
</tr>
<tr>
    <td>Mulai</td>
    <td>:</td>
    <td>{{ $pom['mulai'] }}</td>
</tr>
<tr>
    <td>Selesai</td>
    <td>:</td>
    <td>{{ $pom['selesai'] }}</td>
</tr>
<tr>
    <td>Dibuat Oleh</td>
    <td>:</td>
    <td>{{ $pom['dibuat_oleh'] }}</td>
</tr>
<tr>
    <td>Diketahui Oleh</td>
    <td>:</td>
    <td>{{ $pom['diketahui_oleh'] }}</td>
</tr>
<tr>
    <td>Disetujui Oleh</td>
    <td>:</td>
    <td>{{ $pom['disetujui_oleh'] }}</td>
</tr>

</table>
@endsection