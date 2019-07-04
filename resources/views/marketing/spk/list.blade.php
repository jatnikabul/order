@extends('marketing.front')
@section('content')
<br>
<h5>List SPK</h5>
<span>Surat Pemesanan Kontrak</span>
<br>
<br>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Option</th>
        </tr>
    </thead>
    <tbody>
    <?php $no = 1 ?>
        @foreach($spks as $spk)
        <tr>
        <td> {{ $no++ }} </td>
            <td>{{ $spk->nama_konsumen }}</td>
            <td>{{ date('d-M-Y',strtotime($spk->tanggal)) }}</td>
            <td><a class="mb-2 btn btn-sm btn-success mr-1">Selesai</a></td>
            <td>
            <form action="{{ route('spk.destroy',$spk->id) }}" method="post">
                @csrf
                @method('DELETE')
                <a href="{{ route('spk.show',$spk->id) }}" class="btn btn-primary">Detail</a>
                <a href="{{ route('spk.edit',$spk->id) }}" class="btn btn-warning">Edit</a>
                <button type="submit" href="" class="btn btn-danger">Hapus</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection