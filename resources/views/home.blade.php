@extends('layout/main')

@section('container')
<section id="home" class="article text-center">
            <div class="container shadow-ms">
                

        <div class="card-body">
            @auth
            <p>Welcome <b>{{ Auth::user()->name }}</b></p>
            <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
            @endauth
            @guest
            <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
            <a class="btn btn-info" href="{{ route('register') }}">Register</a>
            @endguest
        </div>


                <div class="row text-center">   
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
        <!--akhir article-->

@endsection

