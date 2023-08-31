@extends('layouts.appUtama')

@section('content')
    <!-- Start retroy layout blog posts -->
    {{-- Section Hero Net Insight --}}
    <section class="section bg-light">
        <div class="container">
            <!-- Judul Besar Net City -->
            <div class="row justify-content-center mb-3">
                <div class="col-md-8 text-center">
                    <h1 class="font-weight-bold" style="text-decoration: underline;">Net <span
                            style="color: rgba(206, 245, 61, 0.8);">City.</span></h1>
                </div>
            </div>
            <!-- /Judul Besar Net City -->

            <div class="row align-items-stretch retro-layout">
                <div class="col-md-4">
                    <a class="h-entry mb-30 v-height gradient">
                        <div class="featured-img" style="background-image: url('images/kiri atas.jpg');"></div>
                    </a>
                    <a class="h-entry v-height gradient">
                        <div class="featured-img" style="background-image: url('images/kiri bawah.jpg');"></div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="h-entry img-5 h-100 gradient">
                        <div class="featured-img" style="background-image: url('images/tengah potrait.jpg');"></div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="h-entry mb-30 v-height gradient">
                        <div class="featured-img" style="background-image: url('images/kanan atas.jpg');"></div>
                    </a>
                    <a class="h-entry v-height gradient">
                        <div class="featured-img" style="background-image: url('images/kanan bawah.jpg');"></div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End retroy layout blog posts -->


    <!-- Start posts-entry -->
    {{-- Section Penjelasan Singkat --}}
    <section class="section posts-entry posts-entry-sm">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-8 text-center">
                    <h1 class="font-weight-bold" style="text-decoration: underline;">Kegiatan<span
                            style="color: rgba(206, 245, 61, 0.8);"> NetCity.</span>
                    </h1>
                </div>
            </div>
            {{-- List kegiatan Event --}}
            <div class="row text-center">
                <div class="col-md-6 col-lg-3">
                    <div class="blog-entry">
                        <a class="img-link">
                            <img src="images/" alt="Image" class="img-fluid">
                        </a>
                        <h2><a>Kegiatan 1</a></h2>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="blog-entry">
                        <a class="img-link">
                            <img src="images/" alt="Image" class="img-fluid">
                        </a>
                        <h2><a>Kegiatan 2</a></h2>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="blog-entry">
                        <a class="img-link">
                            <img src="images/" alt="Image" class="img-fluid">
                        </a>
                        <h2><a>Kegiatan 3</a></h2>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="blog-entry">
                        <a class="img-link">
                            <img src="images/" alt="Image" class="img-fluid">
                        </a>
                        <h2><a>Kegiatan 4</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End posts-entry -->

    {{-- Section Kategori --}}
    <div class="row justify-content-center mb-4">
        <div class="col-md-8 text-center">
            <h1 class="font-weight-bold" style="text-decoration: underline;">
                Modul <span style="color: rgba(206, 245, 61, 0.8);">Modul</span>
            </h1>
        </div>
    </div>
        @foreach ($kategoris as $kategori)
            <section class="section bg-light">
                <div class="container">
                    <div class="row mb-4">
                        <div class="col-sm-6">
                            <h2 class="posts-entry-title">{{ $kategori->nama_kategori }}</h2>
                        </div>
                        <div class="col-sm-6 text-sm-end"><a href="{{ route('user.kategori', $kategori->id_kategori) }}"
                                class="read-more">View All</a>
                        </div>
                    </div>

                    {{-- list kategori Visual Arts and Design --}}
                    <div class="row">
                        @if (count($kategori->modul) > 0)
                            @foreach ($kategori->modul as $modul)
                                <div class="col-lg-4 mb-4">
                                    <div class="post-entry-alt">
                                        <a href="{{ route('user.modul', $modul->id_modul) }}" class="img-link">
                                            <img src="{{ asset('imgModul/' . $modul->gambar_modul) }}" alt="Gambar"
                                                class="img-fluid" style="width: 100%; height: auto;">
                                        </a>
                                        <div class="excerpt">
                                            <h2><a
                                                    href="{{ route('user.modul', $modul->id_modul) }}">{{ $modul->nama_modul }}</a>
                                            </h2>
                                            <p>{{ $modul->isiteaser_modul }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-lg-12 bg-light">
                                <p class="text-dark font-weight-bold text-center"
                                    style="font-size: 24px; line-height: 1.5; padding: 20px 0;">Coming Soon</p>
                            </div>
                        @endif
                    </div>
                </div>
            </section>
        @endforeach
@endsection
