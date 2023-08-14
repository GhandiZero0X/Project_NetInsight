<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>

    <nav class="site-nav">
        <div class="container">
            <div class="menu-bg-wrap">
                <div class="site-navigation">
                    <div class="row g-0 align-items-center">
                        <div class="col-2">
                            <a href="index.html" class="logo m-0 float-start">Blogy<span
                                    class="text-primary">.</span></a>
                        </div>
                        <div class="col-8 text-center">
                            {{-- <form action="#" class="search-form d-inline-block d-lg-none">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="bi-search"></span>
                            </form> --}}

                            <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                                <li class="active"><a href="index.html">Home</a></li>
                                <li class="has-children">
                                    <a href="category.html">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="search-result.html">Search Result</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="single.html">Blog Single</a></li>
                                        <li><a href="category.html">Category</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="#">Menu One</a></li>
                                        <li><a href="#">Menu Two</a></li>
                                        <li class="has-children">
                                            <a href="#">Dropdown</a>
                                            <ul class="dropdown">
                                                <li><a href="#">Sub Menu One</a></li>
                                                <li><a href="#">Sub Menu Two</a></li>
                                                <li><a href="#">Sub Menu Three</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="category.html">Culture</a></li>
                                <li><a href="category.html">Business</a></li>
                                <li><a href="category.html">Politics</a></li>
                                @guest
                                    @if(Route::has('login'))
                                <li><a href={{ route('login') }}>LOGIN</a></li>
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
                                </div>
                                @endguest
                            </ul>
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
</body>
</html>
