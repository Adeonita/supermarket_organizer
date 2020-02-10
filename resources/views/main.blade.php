<!--Essa é uma view template, onde todas as outras views a utilizará por meio
do extends('main').-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="/css/app.css">
        <title>Organizador de Compras</title>
    </head>
    <body>
        <div class="container">
            @yield('selectCategory') <!--Aqui entrará o conteúdo das demais views-->
        </div>
    </body>
</html>

