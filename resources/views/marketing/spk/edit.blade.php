@extends('marketing.front')
@section('content')
<br>
<h5>Edit SPK</h5>
<br>
<div class="container">
    <div class="row">
        <div class="col-5">
            <form action="{{ route('spk.update',$spk->id) }}" method="post">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="">Tanggal</label>
                    <input class="form-control" type="date" name="tanggal" id="" value="{{ $spk['tanggal'] }}">
                </div>
                <div class="form-group">
                    <label for="">Nama Konsumen</label>
                    <input class="form-control" type="text" name="nama_konsumen" value="{{ $spk['nama_konsumen'] }}">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea name="alamat" class="form-control" cols="30" rows="4">{{ $spk['alamat'] }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">No Surat</label>
                    <input class="form-control" type="number" name="no_surat" value="{{ $spk['no_surat'] }}">
                </div>
                <div class="form-group">
                    <label for="">No Telp</label>
                    <input class="form-control" type="text" name="no_telp" value="{{ $spk['no_telp'] }}">
                </div>
                <div class="form-group">
                    <label for="">Produk</label>
                    <input class="form-control" type="text" name="produk" value="{{ $spk['produk'] }}">
                </div>
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" cols="30" rows="4">{{ $spk['deskripsi'] }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Harga</label>
                    <input class="form-control" type="number" name="harga" value="{{ $spk['harga'] }}">
                </div>
                <div class="form-group">
                    <label for="">Total</label>
                    <input class="form-control" type="number" name="total" value="{{ $spk['total'] }}">
                </div>
                <div class="form-group">
                    <label for="">Uang Muka</label>
                    <input class="form-control" type="number" name="uang_muka" value="{{ $spk['uang_muka'] }}">
                </div>
                <div class="form-group">
                    <label for="">Sisa Tagihan</label>
                    <input class="form-control" type="text" name="sisa_tagihan" value="{{ $spk['sisa_tagihan'] }}">
                </div>
                <div class="form-group">
                    <label for="">Pemesanan</label>
                    <input class="form-control" type="text" name="pemesanan" value="{{ $spk['pemesanan'] }}">
                </div>
                <div class="form-group">
                    <label for="">Marketing</label>
                    <input class="form-control" type="text" name="marketing" value="{{ $spk['marketing'] }}">
                </div>
                <div class="form-group">
                    <label for="">Mengetahui</label>
                    <input class="form-control" type="text" name="mengetahui" value="{{ $spk['mengetahui'] }}">
                </div>
                <button class="btn btn-primary" type="submit">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection