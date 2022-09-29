@extends('layout/main')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    <h1>Edit Blog Post</h1>

        <!-- <form> -->
        
        <form action="{{ route('project.update', $project->id) }}" method="POST">
        @method('PUT')
        
        {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="nama_project" aria-describedby="emailHelp" name="nama_project" value="{{$project->nama_project}}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class = "form-control" id="deskripsi_project" rows="5" name="deskripsi_project">{{$project->deskripsi_project}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <input type="hidden" name="id" value="{{ $project->id }}">
        </form>
    </div>


</div>
@endsection