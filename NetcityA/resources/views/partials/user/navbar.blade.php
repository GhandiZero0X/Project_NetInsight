<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<nav class="site-nav">
    <div class="container">
        <div class="menu-bg-wrap">
            <div class="site-navigation">
                <div class="row g-0 align-items-center">
                    <div class="col-2">
                        <a href="{{ route('user.home') }}" class="logo m-0 float-start d-flex align-items-center">
                            <img src="images/LogoNetCity.png" alt="Logo" style="max-width: 40px; height: auto; border-radius: 50%; margin-right: 10px; text-decoration: none;">
                            NetInsight<span class="text-primary">.</span>
                        </a>
                    </div>

                    <div class="col-8 text-right">
                        <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                            <li class="active"><a href="{{ route('user.home') }}">Home</a></li>
                            <li class="has-children">
                                <a href="">Kategori Modul</a>
                               
                                <ul class="dropdown">
                                    @foreach($kategoris as $kategori)
                                    {{-- buat agar list dropdown
                                        yang ini jadi otomatis bertambah
                                        jika memasukkan kategori baru --}}
                                    <li><a href="{{ route('user.kategori') }}" style="text-decoration: none">{{ $kategori->nama_kategori }}</a></li>
                                    @endforeach
                            </li>
                        </ul>

                        @guest
                            @if (Route::has('login'))
                                <li><a href={{ route('login') }}>Login</a></li>
                            @endif
                        @else
                            <li><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @endguest
                    </div>
                    <div class="col-2 text-end">
                        <a href="#"
                            class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
