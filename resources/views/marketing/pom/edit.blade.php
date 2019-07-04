@extends('marketing.front')
@section('content')
<br>
<h5>Edit POM</h5>
<br>
<div class="container">
    <div class="row">
        <div class="col-5">
            <form action="{{ route('pom.update',$pom->id) }}" method="post">
            @csrf
            @method('PUT')

                <div class="form-group">
                    <label for="">Nama Proyek</label>
                    <input class="form-control" type="text" name="nama_proyek" value="{{ $pom['nama_proyek'] }}">
                </div>
                <div class="form-group">
                    <label for="">Programmer Proyek</label>
                    <input class="form-control" type="text" name="programmer_proyek" value="{{ $pom['programmer_proyek'] }}">
                </div>
                <div class="form-group">
                    <label for="">Perihal</label>
                    <input class="form-control" type="text" name="perihal" value="{{ $pom['perihal'] }}">
                </div>
                <div class="form-group">
                    <label for="">Peserta Rapat</label>
                    <input class="form-control" type="text" name="peserta_rapat" value="{{ $pom['peserta_rapat'] }}">
                </div>
                <div class="form-group">
                    <label for="">Lokasi Rapat</label>
                    <input class="form-control" type="text" name="lokasi_rapat" value="{{ $pom['lokasi_rapat'] }}">
                </div>
                <div class="form-group">
                    <label for="">Dibuat Oleh</label>
                    <input class="form-control" type="text" name="lr_dibuat_oleh" value="{{ $pom['lr_dibuat_oleh'] }}">
                </div>
                <div class="form-group">
                    <label for="">Tanggal</label>
                    <input class="form-control" type="date" name="tanggal" value="{{ $pom['tanggal'] }}">
                </div>
                <div class="form-group">
                    <label for="">Diskusi</label>
                    <input class="form-control" type="text" name="diskusi" value="{{ $pom['diskusi'] }}">
                </div>
                <div class="form-group">
                    <label for="">Rencana Kegiatan</label>
                    <input class="form-control" type="text" name="rencana_kegiatan" value="{{ $pom['rencana_kegiatan'] }}">
                </div>
                <div class="form-group">
                    <label for="">Mulai</label>
                    <input class="form-control" type="date" name="mulai" value="{{ $pom['mulai'] }}">
                </div>
                <div class="form-group">
                    <label for="">Selesai</label>
                    <input class="form-control" type="date" name="selesai" value="{{ $pom['selesai'] }}">
                </div>
                <div class="form-group">
                    <label for="">Dibuat Oleh</label>
                    <input class="form-control" type="text" name="dibuat_oleh" value="{{ $pom['dibuat_oleh'] }}">
                </div>
                <div class="form-group">
                    <label for="">Diketahui Oleh</label>
                    <input class="form-control" type="text" name="diketahui_oleh" value="{{ $pom['diketahui_oleh'] }}">
                </div>
                <div class="form-group">
                    <label for="">Disetujui Oleh</label>
                    <input class="form-control" type="text" name="disetujui_oleh" value="{{ $pom['disetujui_oleh'] }}">
                </div>

                <button class="btn btn-primary" type="submit">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection