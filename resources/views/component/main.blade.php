<!DOCTYPE html>
<html lang="en">

@include('component.head')

<body>
    @include('component.header')
    @include('component.sidebar')
    <main id="main" class="main">
        @yield('content')
    </main>
    {{-- @include('component.footer') --}}
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    @include('component.js')
</body>

</html>
