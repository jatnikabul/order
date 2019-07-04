@extends('marketing.front')
@section('content')
<br>
<h5>Detail SPK</h5>
<br>
<table cellpadding="10" class="table-striped">
    <tr>
        <td>Tanggal</td>
        <td>:</td>
        <td>{{ date('d-M-Y', strtotime($spk['tanggal'])) }}</td>
    </tr>
    <tr>
        <td>Nama Konsumen</td>
        <td>:</td>
        <td>{{ $spk['nama_konsumen'] }}</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td>{{ $spk['alamat'] }}</td>
    </tr>
    <tr>
        <td>No Surat</td>
        <td>:</td>
        <td>{{ $spk['no_surat'] }}</td>
    </tr>
    <tr>
        <td>No Telp</td>
        <td>:</td>
        <td>{{ $spk['no_telp'] }}</td>
    </tr>
    <tr>
        <td>Produk</td>
        <td>:</td>
        <td>{{ $spk['produk'] }}</td>
    </tr>
    <tr>
        <td>Deskripsi</td>
        <td>:</td>
        <td>{{ $spk['deskripsi'] }}</td>
    </tr>
    <tr>
        <td>Harga</td>
        <td>:</td>
        <td>{{ $spk['harga'] }}</td>
    </tr>
    <tr>
        <td>Total</td>
        <td>:</td>
        <td>{{ $spk['total'] }}</td>
    </tr>
    <tr>
        <td>Uang Muka</td>
        <td>:</td>
        <td>{{ $spk['uang_muka'] }}</td>
    </tr>
    <tr>
        <td>Sisa Tagihan</td>
        <td>:</td>
        <td>{{ $spk['sisa_tagihan'] }}</td>
    </tr>
    <tr>
        <td>Pemesanan</td>
        <td>:</td>
        <td>{{ $spk['pemesanan'] }}</td>
    </tr>
    <tr>
        <td>Marketing</td>
        <td>:</td>
        <td>{{ $spk['marketing'] }}</td>
    </tr>
    <tr>
        <td>Mengetahui</td>
        <td>:</td>
        <td>{{ $spk['mengetahui'] }}</td>
    </tr>
</table>

@endsection