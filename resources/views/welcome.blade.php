<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Home page</title>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col">
            <p class="text-primary text-center text-uppercase fs-1 mt-5"><marquee behavior="alternate" direction="" scrollamount="12" bgcolor="pink" style="border: 2px solid red; border-radius: 25px;">Welcome Laravel Admin Plane</marquee></p>
        </div>
    </div>
</div>
<main class="py-4">
    @yield('content')
</main>
</body>
</html>
