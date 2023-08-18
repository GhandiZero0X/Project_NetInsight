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
                        <a href="{{ route('user.home') }}" class="logo m-0 float-start">NetInsight<span
                                class="text-primary">.</span></a>
                    </div>
                    <div class="col-8 text-center">
                        {{-- <form action="#" class="search-form d-inline-block d-lg-none">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="bi-search"></span>
                        </form> --}}

                        <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                            <li class="active"><a href="{{ route('user.home') }}">Home</a></li>
                            <li class="has-children">
                                <a href="#">Kategori Modul</a>
                                <ul class="dropdown">
                                    <li><a href="{{ route('user.kategori') }}" style="text-decoration: none">Visual Arts and Design</a></li>
                                    <li><a href="{{ route('user.kategori') }}" style="text-decoration: none">Media and Entertainment</a></li>
                                    <li><a href="{{ route('user.kategori') }}" style="text-decoration: none">Design Communication</a></li>
                                    <li><a href="{{ route('user.kategori') }}" style="text-decoration: none">Fashion and Apparel</a></li>
                            </li>
                        </ul>
                        {{-- <li><a href="category.html">Culture</a></li>
                        <li><a href="category.html">Business</a></li>
                        <li><a href="category.html">Politics</a></li> --}}
                        {{-- <li class="has-children">
                            <a href="{{ route('kategori.index') }}">Category</a>
                            <ul class="dropdown">
                                @isset($categories)
                                    @foreach ($categories as $category)
                                        <li><a
                                                href="{{ route('category', ['id' => $category->id_kategori]) }}">{{ $category->nama_kategori }}</a>
                                        </li>
                                    @endforeach
                                @endisset
                            </ul>
                        </li> --}}
                        @guest
                            @if (Route::has('login'))
                                <li><a href={{ route('login') }}>Login</a></li>
                            @endif
                        @else
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
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
                        {{-- <form action="#" class="search-form d-none d-lg-inline-block">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="bi-search"></span>
                            </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
