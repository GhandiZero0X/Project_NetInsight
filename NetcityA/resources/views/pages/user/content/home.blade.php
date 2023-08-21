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
                        <div class="featured-img" style="background-image: url('images/img_2_horizontal.jpg');"></div>
                    </a>
                    <a class="h-entry v-height gradient">
                        <div class="featured-img" style="background-image: url('images/img_5_horizontal.jpg');"></div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="h-entry img-5 h-100 gradient">
                        <div class="featured-img" style="background-image: url('images/img_1_vertical.jpg');"></div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="h-entry mb-30 v-height gradient">
                        <div class="featured-img" style="background-image: url('images/img_3_horizontal.jpg');"></div>
                    </a>
                    <a class="h-entry v-height gradient">
                        <div class="featured-img" style="background-image: url('images/img_4_horizontal.jpg');"></div>
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
                            <img src="images/img_1_horizontal.jpg" alt="Image" class="img-fluid">
                        </a>
                        <h2><a>Kegiatan 1</a></h2>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="blog-entry">
                        <a class="img-link">
                            <img src="images/img_2_horizontal.jpg" alt="Image" class="img-fluid">
                        </a>
                        <h2><a>Kegiatan 2</a></h2>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="blog-entry">
                        <a class="img-link">
                            <img src="images/img_3_horizontal.jpg" alt="Image" class="img-fluid">
                        </a>
                        <h2><a>Kegiatan 3</a></h2>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="blog-entry">
                        <a class="img-link">
                            <img src="images/img_4_horizontal.jpg" alt="Image" class="img-fluid">
                        </a>
                        <h2><a>Kegiatan 4</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End posts-entry -->

    {{-- Section Kategori --}}

    {{-- Buat semua isi dari kategori yanga ada di home ini
        otomatis tertampil yang terbaru tapi ngak semua modul
        yang terbaru saja yang di tampilkan kalau mua melihat
        yang lain harus klik wiew all dan jika sudah ada kategori
        tetapi belum ada modul akan memunculkan tulisan coming soon --}}

    {{-- 1 kategori Visual Arts and Design --}}
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-8 text-center">
                    <h1 class="font-weight-bold" style="text-decoration: underline;">
                        Modul <span style="color: rgba(206, 245, 61, 0.8);">Modul</span>
                    </h1>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h2 class="posts-entry-title">Visual Arts and Design</h2>
                </div>
                <div class="col-sm-6 text-sm-end"><a href="{{ route('user.kategori') }}" class="read-more">View All</a>
                </div>
            </div>

            {{-- list kategori Visual Arts and Design --}}
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="post-entry-alt">
                        <a href="{{ route('user.modul') }}" class="img-link"><img
                                src="images/Brushstrokes of Imagination.jpg" alt="Image" class="img-fluid"></a>
                        <div class="excerpt">
                            <h2><a href="{{ route('user.modul') }}">Brushstrokes of Imagination</a></h2>
                            <p>Selamat datang di dunia imajinasi yang membentuk Modul "Brushstrokes of Imagination."
                                Mengubah pikiran dan emosi menjadi karya seni memukau adalah tujuan kami. Di sini, kami
                                membuka pintu pemahaman seni visual yang mendalam, membangun keterampilan Anda untuk
                                menggambarkan dunia pribadi. Mari melepaskan kreativitas, mengikuti goresan impian, melukis
                                dunia dengan warna tak terbayangkan sebelumnya!</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="post-entry-alt">
                        <a href="{{ route('user.modul') }}" class="img-link"><img src="images/Dream-Lion-Morphogenesis.jpg"
                                alt="Image" class="img-fluid"></a>
                        <div class="excerpt">
                            <h2><a href="{{ route('user.modul') }}">
                                    Sculpting Dreams: Exploring 3D Art</a></h2>
                            <p>Selamat datang di dunia di mana tiga dimensi membawa ide-ide menjadi hidup dalam Modul
                                "Sculpting Dreams: Exploring 3D Art." Apakah Anda pernah membayangkan memahat objek dari
                                angan-angan Anda menjadi bentuk fisik yang dapat Anda rasakan? Modul ini akan membimbing
                                Anda melalui proses menciptakan seni tiga dimensi yang memukau. Mari kita bersama-sama
                                menyelami dimensi baru dalam seni rupa, di mana karya-karya kita akan merayap keluar dari
                                kanvas dan menjadi nyata di hadapan mata kita!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 2 Kategori Media and Entertainment --}}
    <section class="section">
        <div class="container">

            <div class="row mb-4">
                <div class="col-sm-6">
                    <h2 class="posts-entry-title">Media and Entertainment</h2>
                </div>
                <div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div>
            </div>

            {{-- list kategori Media and Entertainment --}}
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="post-entry-alt">
                        <a href="{{ route('user.modul') }}" class="img-link"><img src="images/img_7_horizontal.jpg"
                                alt="Image" class="img-fluid"></a>
                        <div class="excerpt">
                            <h2><a href="{{ route('user.modul') }}">Startup vs corporate: What job suits you best?</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor
                                laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo,
                                aliquid, dicta beatae quia porro id est.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="post-entry-alt">
                        <a href="{{ route('user.modul') }}" class="img-link"><img src="images/img_6_horizontal.jpg"
                                alt="Image" class="img-fluid"></a>
                        <div class="excerpt">
                            <h2><a href="{{ route('user.modul') }}">Startup vs corporate: What job suits you best?</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor
                                laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo,
                                aliquid, dicta beatae quia porro id est.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="post-entry-alt">
                        <a href="{{ route('user.modul') }}" class="img-link"><img src="images/img_5_horizontal.jpg"
                                alt="Image" class="img-fluid"></a>
                        <div class="excerpt">
                            <h2><a href="{{ route('user.modul') }}">Startup vs corporate: What job suits you best?</a>
                            </h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor
                                laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo,
                                aliquid, dicta beatae quia porro id est.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 3 Kategori Design Communication --}}
    <section class="section bg-light">
        <div class="container">

            <div class="row mb-4">
                <div class="col-sm-6">
                    <h2 class="posts-entry-title">Design Communication</h2>
                </div>
                <div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div>
            </div>

            {{-- list kategori Design Communication --}}
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="post-entry-alt">
                        <a href="{{ route('user.modul') }}" class="img-link"><img src="images/img_7_horizontal.jpg"
                                alt="Image" class="img-fluid"></a>
                        <div class="excerpt">
                            <h2><a href="{{ route('user.modul') }}">Startup vs corporate: What job suits you best?</a>
                            </h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor
                                laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo,
                                aliquid, dicta beatae quia porro id est.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="post-entry-alt">
                        <a href="{{ route('user.modul') }}" class="img-link"><img src="images/img_6_horizontal.jpg"
                                alt="Image" class="img-fluid"></a>
                        <div class="excerpt">
                            <h2><a href="{{ route('user.modul') }}">Startup vs corporate: What job suits you best?</a>
                            </h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor
                                laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo,
                                aliquid, dicta beatae quia porro id est.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="post-entry-alt">
                        <a href="{{ route('user.modul') }}" class="img-link"><img src="images/img_5_horizontal.jpg"
                                alt="Image" class="img-fluid"></a>
                        <div class="excerpt">
                            <h2><a href="{{ route('user.modul') }}">Startup vs corporate: What job suits you best?</a>
                            </h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor
                                laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo,
                                aliquid, dicta beatae quia porro id est.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 4 Kategori Fashion and Apparel --}}
    <section class="section">
        <div class="container">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h2 class="posts-entry-title">Fashion and Apparel</h2>
                </div>
                <div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div>
            </div>

            {{-- list kategori Design Communication --}}
            <div class="row">
                <div class="col-lg-12 bg-light">
                    <p class="text-dark font-weight-bold text-center" style="font-size: 24px; line-height: 1.5; padding: 20px 0;">Coming Soon</p>
                </div>
            </div>
        </div>
    </section>
@endsection
