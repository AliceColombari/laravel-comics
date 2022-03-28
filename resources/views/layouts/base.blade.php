{{-- base generale - associo link per conversione sass in css + includo file header, main e footer --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>
    <!-- richiamato file specifico css -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <!-- inlcudo header -->
    @include('partials.header')
    
    <main class="@yield('main_classes')">
        @yield('main_content')
    </main>
    
    <!-- includo footer -->
    @include('partials.footer')
</body>
</html>