<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        <aside>
        @yield('sidebar')
        </aside>
        <div class="container">
            @yield('content')
        </div>
        @yield('scripts')
    </body>
    
</html>