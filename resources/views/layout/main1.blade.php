<!DOCTYPE html>
<html class="no-js" lang="zxx">
    @include('partials.head1')
<body>
        <div class="main_content">
            @include('partials.sidebar')
            @include('partials.navbar')
            @yield('main_content')
            @include('partials.footer')
        </div>
</body>
@include('partials.linkJs1')
</html>