@extends('marketing.front')
@section('content')
<br>
<h5>Edit Biodata</h5>
<br>
<div class="container">
    <div class="row">
        <div class="col-5">
            <form action="{{ route('biodata.update',$biodata->id) }}" method="post">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input class="form-control" type="text" name="nama" id="" value="{{ $biodata['nama'] }}">
                </div>
                <div class="form-group">
                    <label for="">Tempat, Tanggal Lahir</label>
                    <input class="form-control" type="text" cols="100"  name="tempat" id="" value="{{ $biodata['tempat'] }}">
                    <input class="form-control" type="date" name="tanggal_lahir" id="" value="{{ $biodata['tanggal_lahir'] }}">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea class="form-control" name="alamat" id="" value="" cols="30" rows="2">{{ $biodata['alamat'] }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Nama Instansi</label>
                    <input class="form-control" type="text" name="nama_instansi" id="" value="{{ $biodata['nama_instansi'] }}">
                </div>
                <div class="form-group">
                    <label for="">Alamat Instansi</label>
                    <textarea class="form-control" name="alamat_instansi" id="" value="" cols="30" rows="10">{{ $biodata['alamat_instansi'] }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Jabatan</label>
                    <input class="form-control" type="text" name="jabatan" id="" value="{{ $biodata['jabatan'] }}">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input class="form-control" type="email" name="email" id="" value="{{ $biodata['email'] }}">
                </div>
                <div class="form-group">
                    <label for="">Telepon</label>
                    <input class="form-control" type="number" name="telepon" id="" value="{{ $biodata['telepon'] }}">
                </div>
                <button class="btn btn-primary" type="submit">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection