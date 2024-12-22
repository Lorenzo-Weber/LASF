<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>LASF - @yield('title') </title>

    <link rel="stylesheet" href="/css/styles.css">

    <script src="https://kit.fontawesome.com/d54c4e3858.js" crossorigin="anonymous"></script>


</head>
<body>

    <nav class="Header">
        @yield('header')
    </nav>

    <main>
        @yield('content')
    </main>
    
</body>
</html>