<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-lg main-navbar">
        <div class="container">
            <div class="collapse navbar-collapse">
                <a class="navbar-brand" href="{{ url("/") }}" title="{{ config('app.name', 'Laravel') }}">
                    <svg id="kulzos-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 82.2 22.2">
                        <path class="kulzos-path"
                              d="M13.8 20c0 .5-.2 1-.6 1.4-.4.4-.9.7-1.5.7-.3 0-.6-.1-.9-.2-.3-.1-.6-.4-.8-.7l-3.6-5.3-1.9 2V20c0 .6-.2 1-.6 1.4-.3.4-.8.6-1.3.6-.6 0-1-.2-1.4-.6-.5-.4-.7-.8-.7-1.4V2.3c0-.6.2-1 .6-1.4S2 .3 2.6.3s1 .2 1.4.6.6.9.6 1.4v11l5.5-6.5c.4-.4.8-.6 1.4-.6.5 0 1 .2 1.3.6s.6.8.6 1.3c0 .4-.1.9-.4 1.2l-3.6 4.1 4.1 5.4c.2.4.3.8.3 1.2zM29.9 21.4c-.4.4-.9.6-1.5.6s-1-.2-1.4-.6-.6-.9-.6-1.4v-.1c-.5.6-1.3 1.1-2.2 1.6-.9.5-2 .7-3.3.7-1.7 0-3-.4-3.8-1.3s-1.2-2.1-1.2-3.6V8.2c0-.6.2-1 .6-1.4.5-.4.9-.6 1.5-.6s1 .2 1.4.6c.4.3.6.8.6 1.4v7.6c0 .5.1 1 .2 1.3.1.4.3.7.6.9s.5.4.9.5.7.1 1.2.1c.8 0 1.5-.2 2.1-.5s1.1-.8 1.4-1.2V8.2c0-.6.2-1 .6-1.4s.9-.6 1.5-.6 1 .2 1.4.6.6.9.6 1.4V20c0 .6-.2 1-.6 1.4zM36.3 21.4c-.4.4-.9.6-1.5.6s-1-.2-1.4-.6c-.4-.4-.6-.8-.6-1.4V2.3c0-.6.2-1 .6-1.4.4-.4.9-.6 1.5-.6s1 .2 1.4.6.6.9.6 1.4V20c0 .6-.2 1-.6 1.4zM51.3 20c0 .5-.2.9-.5 1.3s-.7.5-1.2.5h-9.2c-.5 0-1-.2-1.4-.6s-.6-.9-.6-1.5c0-.2 0-.5.1-.7l.3-.6 6.7-8.5h-5.4c-.5 0-.9-.2-1.2-.5-.3-.4-.5-.8-.5-1.3s.2-.9.5-1.2c.3-.3.8-.5 1.2-.5h9.1c.5 0 .9.2 1.3.6.4.4.6.8.6 1.4 0 .5-.1.9-.4 1.3l-6.8 8.6h5.7c.5 0 .9.2 1.2.5.4.3.5.7.5 1.2zM68.2 14.1c0 1.1-.2 2.2-.6 3.1-.4 1-.9 1.8-1.6 2.6-.7.7-1.6 1.3-2.6 1.8-1 .4-2.2.7-3.4.7-1.3 0-2.4-.2-3.4-.7s-1.9-1-2.6-1.8c-.7-.7-1.2-1.6-1.6-2.6-.4-1-.6-2-.6-3.1s.2-2.1.6-3.1c.4-1 .9-1.8 1.6-2.6.7-.7 1.6-1.3 2.6-1.8 1-.4 2.1-.6 3.4-.6s2.4.2 3.4.7c1 .4 1.9 1 2.6 1.8.7.7 1.2 1.6 1.6 2.6.4.9.6 1.9.6 3zm-4.3 0c0-.6-.1-1.2-.3-1.7s-.4-1-.8-1.4c-.3-.4-.7-.7-1.2-1-.5-.2-1-.4-1.7-.4-.6 0-1.2.1-1.7.4-.5.2-.9.6-1.2 1s-.6.9-.8 1.4-.3 1.1-.3 1.7c0 .6.1 1.2.3 1.7.2.5.4 1 .8 1.4.3.4.7.7 1.2 1 .5.2 1 .4 1.7.4.6 0 1.2-.1 1.7-.4.5-.2.9-.6 1.2-1s.6-.9.8-1.4c.2-.5.3-1.1.3-1.7zM81.8 17.3c0 .7-.1 1.4-.4 2s-.7 1.1-1.3 1.6c-.6.4-1.3.8-2.1 1s-1.8.4-2.8.4c-.5 0-1.1 0-1.7-.1s-1.2-.2-1.8-.4c-.6-.2-1.1-.4-1.6-.6s-.9-.6-1.1-.9-.3-.5-.3-.9c0-.5.2-.9.5-1.2.4-.3.7-.5 1.2-.5.3 0 .6.1.8.2.6.4 1.3.7 2 .9.7.2 1.4.4 2.1.4.9 0 1.6-.2 2-.5s.6-.7.6-1.2c0-.4-.2-.7-.7-1-.5-.2-1-.4-1.7-.5s-1.4-.3-2.2-.5c-.8-.2-1.5-.4-2.2-.8-.7-.3-1.2-.8-1.7-1.4-.5-.6-.7-1.4-.7-2.4 0-.6.1-1.3.4-1.8.3-.6.7-1.1 1.2-1.6.5-.4 1.2-.8 2-1.1.8-.3 1.7-.4 2.7-.4.5 0 1.1 0 1.6.1.6.1 1.1.2 1.6.4s1 .4 1.4.6.7.5 1 .8c.2.2.3.5.3.8 0 .4-.2.8-.5 1.1s-.7.4-1.1.4c-.3 0-.6-.1-.8-.2-.5-.3-1-.5-1.6-.7s-1.2-.2-1.8-.2c-.7 0-1.3.1-1.8.4-.4.3-.7.7-.7 1.1 0 .4.2.7.7.9.4.2 1 .4 1.7.5s1.4.3 2.2.5 1.5.5 2.2.8 1.2.9 1.7 1.5c.4.6.7 1.4.7 2.5z"/>
                    </svg>
                </a>
                <form method="GET" action="{{url('/search')}}" class="form-inline my-2 my-lg-0 top-search-form">
                    <input value="{{Session::get('keyword')}}" name="keyword" class="form-control mr-sm-2 top-search" autocomplete="off" type="search"
                           placeholder="başlık, #girdi, *kategori ya da @yazar" aria-label="Ara">
                    <div class="btn-group navbar-search-btn">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit"><i
                                    class="icon-magnifier"></i></button>
                        <button type="button" class="btn-sm btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"
                                data-reference="parent">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                </form>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tooltip" data-title="mesajlar" data-placement="bottom"
                           href="#">
                            <i class="icon-envelope"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"
                           aria-haspopup="true"
                           aria-expanded="false" href="#">
                            <i class="icon-bell"></i>
                            <span class="notification-count">1</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="onlineList">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="tooltip" data-title="duyurular"
                           data-placement="bottom">
                            <i class="icon-feed"></i>
                        </a>
                    </li>

                    @guest
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" id="onlineList" data-toggle="dropdown"
                               aria-haspopup="true"
                               aria-expanded="false" href="#">
                                <i class="icon-people"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="onlineList">
                                <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                                <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </div>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <ul class="header-bottom-left">
                        <li>
                            <a href="#">gündem</a>
                        </li>
                        <li>
                            <a href="#">ükde</a>
                        </li>
                        <li>
                            <a href="#">diğer</a>
                        </li>
                        <li>
                            <a href="#">spor</a>
                        </li>
                        <li>
                            <a href="#">sanat</a>
                        </li>
                        <li>
                            <a href="#">politika</a>
                        </li>
                        <li>
                            <a href="#">gündem</a>
                        </li>
                        <li>
                            <a href="#">ükde</a>
                        </li>
                        <li>
                            <a href="#">diğer</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <ul class="header-bottom-right">
                        <li>
                            <a href="#" class="theme-link" data-theme="white">beyaz</a>
                        </li>
                        <li>
                            <a href="#" class="theme-link" data-theme="dark">gece</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <main class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3 left-content">
                    @include('layouts.left')
                </div>
                <div class="col-md-9 right-content">
                    @yield('content')
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>
