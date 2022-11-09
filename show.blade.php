@extends('layout/main')

@section('container')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1>{{$project->nama_project}}</h1>
        <small>Tanggal : {{$project->created_at}}</small>
        <p>{{$project->deskripsi_project}}</p>

        @if(Auth::user())
        <div>
            <a href="/project/{{$project->id}}/edit" class="btn btn-primary">Edit</a>


            <!-- <form action="{{ route('project.destroy',
            $project->id) }}" method="POST">
            @method('DELETE')
            {{ csrf_field() }} -->
            <input type="hidden" name="id" value="{{
            $project->id }}"> <br />

            <a href="/project/destroy/{{$project->id}}" onclick="return confirm('Yakin menghapus')" class="btn btn-danger">Delete</a>
            <!-- </form> -->
        </div>
        <img src="{{asset('storage/posts_image/'.$project->picture)}}">
        @endif
    </div>
</div>


@endsection

