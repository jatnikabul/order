@extends('marketing.front')
@section('content')
<br>
<h5>List POM</h5>
<span>Point Of Meeting</span>
<br>
<br>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Proyek</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Option</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1 ?>
        @foreach($poms as $pom)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $pom->nama_proyek }}</td>
            <td>{{ date('d-M-Y',strtotime($pom->tanggal)) }}</td>
            <td><a class="mb-2 btn btn-sm btn-success mr-1">Selesai</a></td>
            <td>
            <form action="{{ route('pom.destroy',$pom->id) }}" method="post">
            @csrf
            @method('DELETE')
                <a href="{{ route('pom.show',$pom->id) }}" class="btn btn-primary">Detail</a>
                <a href="{{ route('pom.edit',$pom->id) }}" class="btn btn-warning">Edit</a>
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection