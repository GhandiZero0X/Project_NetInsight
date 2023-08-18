@extends('layouts.appUtama')

@section('content')
    <div class="section search-result-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading" style="font-weight: bold">Category: <span
                            style="color: rgba(206, 245, 61, 0.8)">Visual Arts and Design</span> </div>
                </div>
            </div>
            <div class="row posts-entry">
                <div class="col-lg-8">
                    <div class="blog-entry d-flex blog-entry-search-item bg-light">
                        <a href="{{ route('user.modul') }}" class="img-link me-4">
                            <img src="images/Brushstrokes of Imagination.jpg"
                                alt="Image" class="img-fluid">
                        </a>
                        <div>
                            <span>Visual Arts and Design</span>
                            <h2><a href="{{ route('user.modul') }}">Brushstrokes of Imagination</a></h2>
                            <p>Selamat datang di dunia imajinasi yang membentuk Modul "Brushstrokes of Imagination."</p>
                            <p><a href="{{ route('user.modul') }}" class="btn btn-sm btn-outline-primary">Read More</a></p>
                        </div>
                    </div>

                    <div class="blog-entry d-flex blog-entry-search-item">
                        <a href="single.html" class="img-link me-4">
                            <img src="images/Digital Realms.gif" alt="Image"
                                class="img-fluid">
                        </a>
                        <div>
                            <span>Visual Arts and Design</span>
                            <h2><a href="single.html">Digital Realms: Creating Art in Pixels</a></h2>
                            <p>Selamat datang di era di mana seni bertemu teknologi dalam Modul "Digital Realms: Creating
                                Art in Pixels."</p>
                            <p><a href="single.html" class="btn btn-sm btn-outline-primary">Read More</a></p>
                        </div>
                    </div>

                    <div class="blog-entry d-flex blog-entry-search-item bg-light">
                        <a href="single.html" class="img-link me-4">
                            <img src="images/Dream-Lion-Morphogenesis.jpg" alt="Image"
                                class="img-fluid">
                        </a>
                        <div>
                            <span class="date">Sculpting Dreams: Exploring 3D Art<a href="#">Business</a></span>
                            <h2><a href="single.html">Thought you loved Python? Wait until you meet Rust</a></h2>
                            <p>Selamat datang di dunia di mana tiga dimensi membawa ide-ide menjadi hidup dalam Modul
                                "Sculpting Dreams: Exploring 3D Art."</p>
                            <p><a href="single.html" class="btn btn-sm btn-outline-primary">Read More</a></p>
                        </div>
                    </div>
                </div>

                @include('partials.user.categories')
            </div>
        </div>
    </div>
@endsection
