<!doctype html>
<html lang="en">

<head>
    
    {{-- Metatags necessárias --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    {{-- Arquivos de estilização (css, bootstrap, ícones, etc) --}}
    <link rel="stylesheet" href="/templates/login/fonts/icomoon/style.css">
    <link rel="stylesheet" href="/templates/login/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/templates/login/css/bootstrap.min.css">
    <link rel="stylesheet" href="/templates/login/css/style.css">

    {{-- Título página --}}
    <title>Meus Bicos - @yield('title')</title>

    {{-- Ícone --}}
    <link rel="shortcut icon" href="/images/icons/cogwheel-145804_1280.png" type="image/x-icon">
</head>

<body>

    {{-- Corpo página --}}
    @yield('content-page')


    {{-- Arquivos scripts necessários --}}
    <script src="/template/login/js/jquery-3.3.1.min.js"></script>
    <script src="/template/login/js/popper.min.js"></script>
    <script src="/template/login/js/bootstrap.min.js"></script>
    <script src="/template/login/js/main.js"></script>

</body>
</html>