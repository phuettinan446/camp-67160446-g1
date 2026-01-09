<!doctype html>
<html lang="@yield('lang', 'en')">
    @include('template.components.header')
    <body class="@yield('body_class', 'bg-body-secondary')">
        @yield('content')
        @include('template.components.script')
    </body>
</html>
