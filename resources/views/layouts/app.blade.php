<!DOCTYPE html>
<html lang="en">
@include('partials._head')

<body data-spy="scroll" data-offset="80">
    @include('partials._preloader')
    @include('partials._header')

    @yield('content')

    @include('partials._footer')
    @include('partials._scripts')
</body>
</html>
