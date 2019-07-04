@extends('marketing.front')
@section('content')
<h5>POM</h1>
<form method="post" action="{{ route('pom.store') }}">
<label for="">Nama Proyek</label>
<input type="text" name="nama_proyek" class="form-control">
<br>
<label for="">Programmer Proyek</label>
<input type="text" name="programmer_proyek" class="form-control">
<br>
<label for="">Perihal</label>
<input type="text" name="perihal" class="form-control">
<br>
<label for="">Peserta Rapat</label>
<input type="text" name="peserta_rapat" class="form-control">
<br>
<label for="">Lokasi Rapat</label>
<input type="text" name="lokasi_rapat" class="form-control">
<br>
<label for="">Dibuat Oleh</label>
<input type="text" name="lr_dibuat_oleh" class="form-control">
<br>
<label for="">Tanggal</label>
<input type="date" name="tanggal" class="form-control">
<br>
<label for="">Diskusi</label>
<input type="text" name="diskusi" class="form-control">
<br>
<label for="">Rencana Kegiatan</label>
<input type="text" name="rencana_kegiatan" class="form-control">
<br>
<label for="">Mulai</label>
<input type="date" name="mulai" class="form-control">
<br>
<label for="">Selesai</label>
<input type="date" name="selesai" class="form-control">
<br>
<label for="">Dibuat Oleh</label>
<input type="text" name="dibuat_oleh" class="form-control">
<br>
<label for="">Diketahui Oleh</label>
<input type="text" name="diketahui_oleh" class="form-control">
<br>
<label for="">Disetujui Oleh</label>
<input type="text" name="disetujui_oleh" class="form-control">

<button type="submit">Sumbit</button>
</form>
@endsection