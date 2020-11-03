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
            <div class="flex justify-between">
                <div class="flex-1">
                    @include('partials._sidebar-links')
                </div>
                <div class="flex-1">2</div>
                <div class="flex-1">
                    @include('partials._sidebar-friends')
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>
