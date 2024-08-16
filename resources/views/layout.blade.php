<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
        th{
            background-color: rgb(1,0,140);
            text-align: center;
        }
        a{
            color: white;
        }
        .activo a{
            color: white;
        }
        .activo{
            background-color: black;
        }
        .servicios{
            background-color: rgb(1,0,140);
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>
     <nav>
        <table class="table">
            @include('partials.nav')
        </table> 
     </nav>
</body>
</html>