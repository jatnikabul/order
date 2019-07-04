@extends('marketing.front')
@section('content')
<h5>SPK</h5>
<form action="{{ route('spk.store') }}" method="POST">
@csrf

<label for="">tangggal</label>
<input type="text" name="tanggal" id="">
<br>
<label for="">nama konsumen</label>
<input type="text" name="nama_konsumen">
<br>
<label for="">alamat</label>
<textarea name="alamat" id="" cols="30" rows="2"></textarea>
<br>
<label for="">no_surat</label>
<input type="number" name="no_surat">
<br>
<label for="">no_telp</label>
<input type="string" name="no_telp">
<br>
<label for="">produk</label>
<input type="text" name="produk" id="">
<br>
<label for="">deskripsi</label>
<textarea name="deskripsi" id="" cols="30" rows="2"></textarea>
<br>
<label for="">harga</label>
<input type="number" name="harga" id="">
<br>
<label for="">total</label>
<input type="number" name="total" id="">
<br>
<label for="">uang muka</label>
<input type="number" name="uang_muka" id="">
<br>
<label for="">sisa tagihan</label>
<input type="number" name="sisa_tagihan" id="">
<br>
<label for="">pemesanan</label>
<input type="text" name="pemesanan" id="">
<br>
<label for="">marketing</label>
<input type="text" name="marketing" id="">
<br>
<label for="">mengetahui</label>
<input type="text" name="mengetahui" id="">
<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection