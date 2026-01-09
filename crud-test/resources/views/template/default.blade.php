<!doctype html>
<html lang="@yield('lang', 'en')">
    @include('template.components.header')
    <body class="@yield('body_class', 'layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary')">
        <div class="app-wrapper">
            <main class="app-main">
                <div class="container-fluid p-5">
                    @yield('content')
                </div>
            </main>
        @include('template.components.footer')
        </div>
        @include('template.components.script')
    </body>
</html>
