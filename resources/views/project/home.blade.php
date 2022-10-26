@extends('layout/main')

@section('container')

<div class="mt-5 text-center">
    <h1>UTS WEB 2 - Vellya Riona</h1>
</div>


@endsection




<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1>Mata Kuliah Saya</h1>
        @if(count($matkul)>0)
            @foreach ($matkul as $p)
            <div class="well">
                <h3><a href="/project/{{$p->id}}">
                {{$p->nama_matkul}}</a></h3>
                <small>Tanggal: {{$p->created_at}}</small>
            </div>
            @endforeach
        @else
        <h3>Tidak ada data.</h3>
        @endif

        Halaman : {{ $matkul->currentPage() }} <br />
        Jumlah Data : {{ $matkul->total() }} <br />
        Data Per Halaman : {{ $matkul->perPage() }} <br />
        <div class="d-flex">
        {{ $matkul->links() }}
        </div>
    </div>
</div>



