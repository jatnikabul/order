@extends('marketing.front')
@section('content')
<h5>Biodata</h5>

            <form action="{{ route('biodata.store') }}" method="post">
            @csrf
                
                    <label for="">Nama Lengkap</label>
                    <input class="" type="text" name="nama" id="">
                    <br>
                
                
                    <label for="">Tempat, Tanggal Lahir</label>
                    <input class="" type="text" cols="100"  name="tempat" id="">
                    <input class="" type="date" name="tanggal_lahir" id="">
                    <br>        
                    <label for="">Alamat</label>
                    <textarea class="" name="alamat" id="" cols="30" rows="2"></textarea>
                    <br>
                
                
                    <label for="">Nama Instansi</label>
                    <input class="" type="text" name="nama_instansi" id="">
                    <br>
                
                
                    <label for="">Alamat Instansi</label>
                    <textarea class="" name="alamat_instansi" id="" cols="30" rows="10"></textarea>
                    <br>
                
                
                    <label for="">Jabatan</label>
                    <input class="" type="text" name="jabatan" id="">
                    <br>
                
                
                    <label for="">Email</label>
                    <input class="" type="email" name="email" id="">
                    <br>
                
                
                    <label for="">Telepon</label>
                    <input class="" type="number" name="telepon" id="">
                    <br>
                
                <button class="btn btn-primary" type="submit">Simpan</button>
            </form>

@endsection