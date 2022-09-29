@extends('layout/main')

@section('container')
<section id="home" class="article text-center">
            <div class="container shadow-ms">
                <div class="row text-center"> 
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <strong>{{ $message }}</strong>
                    </div>
                @endif   
                    <div class="col">
                        <h2>Hi, I'am Vellya Riona👋</h2>
                    </div>
                </div>
                <div class="row justify-content-center text-center mt-3 text-dark">
                    <div class="col-md-4 mb-3">
                        <div class="card shadow p"><a class="card-box" href="/about">
                            <div class="card-body">
                                <h5 class="card-title">About</h5>
                                <p class="card-text">Detail >></p>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card shadow p"><a class="card-box" href="/education">
                            <div class="card-body">
                                <h5 class="card-title">Education</h5>
                                <p class="card-text">Detail >></p>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card shadow p"><a class="card-box" href="/projects">
                            <div class="card-body">
                                <h5 class="card-title">Projects</h5>
                                <p class="card-text">Detail >></p>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1>Project Saya</h1>
        @if(count($project)>0)
            @foreach ($project as $p)
            <div class="well">
                <h3><a href="/project/{{$p->id}}">
                {{$p->nama_project}}</a></h3>
                <small>Tanggal: {{$p->created_at}}</small>
            </div>
            @endforeach
        @else
        <h3>Tidak ada data.</h3>
        @endif
    </div>
</div>


<a href="{{ route('project.create') }}">Create New Post</a>
<a href="http://localhost:8000/project/create">Create New Post</a>
@endsection


