@extends('marketing.front')
@section('content')
<br>
<h5>List Biodata</h5>
<span>Data Diri</span>
<br>
<br>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Option</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1 ?>
        @foreach($biodatas as $biodata)
        <tr>
            <td> {{ $no++ }} </td>
            <td>{{ $biodata->nama }}</td>
            <td>{{ date('d-M-Y',strtotime($biodata->created_at ))}}</td>
            <td><a class="mb-2 btn btn-sm btn-success mr-1">Selesai</a></td>
            <td>
                
                <form action="{{ route('biodata.destroy',$biodata->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                <a href="{{ route('biodata.show',$biodata->id) }}" class="btn btn-primary">Detail</a>
                <a href="{{ route('biodata.edit',$biodata->id) }}" class="btn btn-warning">Edit</a>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection