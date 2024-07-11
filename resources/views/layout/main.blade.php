<!DOCTYPE html>
<html lang="en">
<head>
    @include('include.head')
    @stack('head')
    <title>@yield('title')</title>
</head>
<body class="overflow-x-hidden">
    <header>
        @include('include.header')
    </header>
    
    @yield('content')

    <footer>
        @include('include.footer')
    </footer>


    <script src="assets/js/script.js"></script>
    <script src="https://kit.fontawesome.com/91441035a6.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    @stack('js')   
</body>
</html>