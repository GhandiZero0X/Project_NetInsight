@extends('layouts.appUtama')

@section('content')
    <div class="site-cover site-cover-sm same-height overlay single-page"
        style="background-image: url('images/Brushstrokes of Imagination.jpg');">
        <div class="container">
            <div class="row same-height justify-content-center">
                <div class="col-md-6">
                    <div class="post-entry text-center">
                        <h1 class="mb-4">Brushstrokes of Imagination</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="container">
            <div class="row blog-entries element-animate">
                <div class="col-md-12 col-lg-8 main-content">
                    <div class="row my-4">
                        <div class="row-md-6 mb-4 d-flex justify-content-center align-items-center">
                            <img src="images/Brushstrokes of Imagination.jpg" alt="Image placeholder" class="img-fluid rounded" style="max-width: 300px; max-height: 200px;">
                        </div>
                    </div>
                    <div class="post-content-body">
                        <p>Selamat datang di dalam Modul "Brushstrokes of Imagination." Di sini, Anda akan diundang untuk
                            menjelajahi alam semesta seni visual dengan goresan imajinasi Anda sendiri. Modul ini adalah
                            peluang bagi Anda untuk menggali kreativitas, memahami elemen-elemen dasar seni rupa, dan
                            membangun keterampilan dalam mengomunikasikan pesan dan emosi melalui lukisan Anda.</p>
                        <p>Tujuan Modul:
                            Membantu Anda mengembangkan pemahaman mendalam tentang seni visual, memberikan wawasan tentang
                            komposisi yang kuat, dan memotivasi Anda untuk menciptakan karya seni yang unik dan memikat.</p>
                        <p>Materi Modul:
                            1. Pengantar ke Dunia Seni Visual, Apa itu seni visual dan mengapa itu penting?
                            Mengapa seni memiliki kekuatan untuk menyentuh emosi dan pikiran?</p>
                        <p>2. Elemen Dasar Seni Rupa,
                            Goresan kuas dan aliran dalam seni lukis.
                            Memahami penggunaan warna untuk menciptakan suasana dan mood.
                            Mengeksplorasi tekstur dan bagaimana itu dapat menambah dimensi pada karya Anda.
                            Peran bentuk dan garis dalam mengkomunikasikan ide.</p>
                        <p>3. Komposisi yang Kuat,
                            Mengenal prinsip-prinsip desain: keseimbangan, kontras, ritme, proporsi, dan penekanan.
                            Bagaimana mengatur elemen-elemen dalam karya Anda agar memiliki daya tarik visual yang kuat.
                            Menggunakan komposisi untuk menceritakan cerita atau menggambarkan emosi.</p>
                        <p>4. Menciptakan Karya Abstrak yang Bermakna,
                            Apa itu seni abstrak dan bagaimana melibatkan penonton dalam interpretasi.
                            Menggunakan warna, tekstur, dan bentuk untuk mengomunikasikan perasaan yang sulit diungkapkan.
                        </p>
                        <p>5. Menguji Kreativitas Anda,
                            Mendapatkan inspirasi dari berbagai sumber: alam, perasaan, pengalaman, dan budaya.
                            Latihan kreatif: dari eksperimen goresan hingga menciptakan karya yang memadukan elemen-elemen
                            seni rupa.</p>

                        <p>Pesan Akhir:
                            Modul "Brushstrokes of Imagination" dirancang untuk membantu Anda mengekspresikan diri melalui
                            seni, menghargai keunikan setiap goresan kuas, dan memahami bahasa visual yang mendalam. Kami
                            mengundang Anda untuk melepaskan imajinasi, mengejar inspirasi, dan menghadirkan karya seni yang
                            mencerminkan dunia dalam pandangan Anda sendiri.

                            Selamat berkarya!</p>
                    </div>
                    <div class="download-button">
                            <a href="" class="btn btn-neon-green border">
                                <i class="bx bxs-file-pdf"></i> Download Modul
                            </a>
                    </div>

                </div>
                <!-- END main-content -->

                @include('partials.user.categories')
                <!-- END sidebar -->

            </div>
        </div>
    </section>
    <!-- End posts-entry -->
@endsection
