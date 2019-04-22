<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header style="border: #1b4b72 solid 1px; background-color: rebeccapurple">Header</header>

        <main style="background-color: gold">@yield('content')</main>

    <footer style="background-color: red">@yield('footer')</footer>
</body>
</html>