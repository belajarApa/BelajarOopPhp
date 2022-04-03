<!DOCTYPE html>
<html class="no-js" lang="zxx">
    @include('partials.head')
<body>
        <div class="main_content">
            @include('partials.sidebar')
            @include('partials.navbar')
            @yield('main_content')
            @include('partials.footer')
        </div>
</body>
@include('partials.linkJs')
</html>