<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista maestra</title>
</head>
<body>
    <header>
        Mi sitio web
    </header>

    @yield('content')

    <section>
        @yield('subcontent')
    </section>
</body>
</html>
