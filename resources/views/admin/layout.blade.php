<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | Admin</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/adminlte/css/adminlte.min.css">

    @stack('styles')
</head>
<body>
    <div id="app">
        <header class="space-inter">
            @include('partials.navbar')
            <br>
            <br>
            <div class="container container-flex space-between">
                <figure class="logo"><img src="" alt=""></figure>
                {{-- <h1>{{ config('app.name') }}</h1> --}}
                <nav class="custom-wrapper" id="menu">

                </nav>
            </div>
        </header>
        <div>
            <!-- Content Header (Page header) -->
            <section class="content-header">
                @yield('header')
            </section>
            <!-- /.content-header -->
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </div>


        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <!-- jQuery -->
        <script src="/adminlte/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="/adminlte/js/adminlte.min.js"></script>
        @stack('scripts')

</body>
</html>
