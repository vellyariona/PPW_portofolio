@extends('layout/main')

@section('container')

<table class="table table-stripted" border="1">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Alasan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data_matakuliah as $matkul)
            <tr>
                <td>{{ ++$no }}</td>
                <td>{{ $matkul->nama }}</td>
                <td>{{ $matkul->alasan }}</td>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection