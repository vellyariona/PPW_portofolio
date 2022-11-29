@extends('layouts.app')

@section('container')
<style type="text.css">
    .pagination li {
        float: left;
        list-style-type: none;
        margin: 5px;
    }
</style>

<!-- content wrapper -->
    <div class="content-wrapper">
        <!-- content header -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Gallery</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active">
                                Gallery
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- /.content wrapper -->

<!-- Main Content -->
<div class = "content">
    <div class = "container">
        <div class = "row">
            <div class = "col-12">
                <div class = "card card-success">
                    <div class = "card-header">
                        <h4 class = "card-title">Gallery API</h4>
                    </div>
                    <div class = "card-body">
                        <div class = "row">

                            <div class = "col-sm-2" id="gallery-api">
                                <div>
                                    <a class = "example-image-link" href = ""
                                    data-lightbox="example-2" data-title="">
                                        <img class = "example-image img-fluid mb-2"
                                        src = "" alt = "image-1" /></a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection






