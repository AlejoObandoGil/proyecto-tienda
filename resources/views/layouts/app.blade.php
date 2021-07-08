<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>@yield('meta-title', config('app.name') . " | Shop")</title>
    <meta name="description" content="@yield('meta-description', 'Blog de películas y series clásicas y de estreno 2021, para ver online y descargar en full hd 1024p.')">

	<link rel="stylesheet" href="/css/normalize.css">
	<link rel="stylesheet" href="/css/framework.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/responsive.css">
    <link rel="stylesheet" href={{ url('css/app.css') }}>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

</head>
<body>
    <div id="app">

        <div class="preload"></div>
            <header class="space-inter">
                @include('partials.navbar')
                <br>
                <br>
                <div class="container container-flex space-between">
                    <figure class="logo"><img src="" alt=""></figure>
                    <h1>{{ config('app.name') }}</h1>
                    <nav class="custom-wrapper" id="menu">
                        {{-- <div class="pure-menu"></div> --}}
                        {{-- <ul class="container-flex list-unstyled">
                            <li><a href="/" class="text-uppercase">Home</a></li>
                            <li><a href="about.html" class="text-uppercase">About</a></li>
                            <li><a href="archive.html" class="text-uppercase">Archive</a></li>
                            <li><a href="contact.html" class="text-uppercase">Contact</a></li>
                        </ul> --}}
                    </nav>
                    {{-- <figure class="logo-xs"><img src="/img/logo-p.png" alt=""></figure> --}}
                </div>
            </header>
            {{-- contenido --}}    
            <main class="py-4">
                @yield('content')
            </main>
        </div>
        <footer>
            <div class="container">
                <figure class="logo"><img class="brand-image img-circle elevation-3" src="" alt=""></figure>
                <nav>
                    <ul class="container-flex space-center list-unstyled">
                        {{-- <li><a href="/" class="text-uppercase c-white">home</a></li>
                        <li><a href="about.html" class="text-uppercase c-white">about</a></li>
                        <li><a href="archive.html" class="text-uppercase c-white">archive</a></li>
                        <li><a href="contact.html" class="text-uppercase c-white">contact</a></li> --}}
                    </ul>
                </nav>
                <div class="divider-2"></div>
                <p>Nunc placerat dolor at lectus hendrerit dignissim. Ut tortor sem, consectetur nec hendrerit ut, ullamcorper ac odio. Donec viverra ligula at quam tincidunt imperdiet. Nulla mattis tincidunt auctor.</p>
                <div class="divider-2" style="width: 80%;"></div>
            </div>
        </footer>  
    </div>    

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

@stack('scripts')

</body>    
</html>
