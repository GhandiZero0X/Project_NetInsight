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
                                alt="Image" class="img-fluid" style="max-width: 220px; max-height: 160px;">
                        </a>
                        <div>
                            <span>Visual Arts and Design</span>
                            <h2><a href="{{ route('user.modul') }}">Brushstrokes of Imagination</a></h2>
                            <p><a href="{{ route('user.modul') }}" class="btn btn-sm btn-outline-primary bold">Read More</a></p>
                        </div>
                    </div>
                </div>
                @include('partials.user.categories')
        </div>
    </div>
@endsection
