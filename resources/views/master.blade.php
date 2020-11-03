<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tweety App - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div>
    @include('partials.navbar')
    <main>
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <div class="lg:flex justify-between">
                <div class="lg:w-1/6 lg:w-32">
                    @include('partials._sidebar-links')
                </div>
                <div class="lg:mx-10 flex-1">
                    @yield('content')
                </div>
                <div class="lg:w-1/5">
                    @include('partials._sidebar-friends')
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>
