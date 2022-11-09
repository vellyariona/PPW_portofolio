@extends('layout/main')



@section('container')
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
        <h1>Add Project</h1>
        <!-- <form> -->
        <!-- <form action="{{ route('project.store') }}" method="multipart/form-data"> -->
        <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="form-group">
                <label for="nama_project">Nama Project</label>
                <input type="text" class="form-control" id="nama_project" aria-describedby="emailHelp" name="nama_project">
            </div>
            <div class="form-group">
                <label for="description">Deskripsi Project</label>
                <textarea class = "form-control" id="deskripsi_project" rows="5" name="deskripsi_project"></textarea>
            </div>

            <div class="form-group">
                <label for="input-file">File input</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="input-file" name="picture">
                        <label class="custom-file-label" for="input-file">Choose file</label>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection