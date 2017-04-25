<html>
    <head>
        <title>Телефонная книга - @yield('title')</title>
    </head>
    <body>
    <style>
        table {
            border-spacing: 0;
            border-collapse: collapse;
        }
        table td, table th {
            border: 1px solid #ccc;
            padding: 5px;
        }
        table th {
            background: #eee;
        }
    </style>
        @section('sidebar')
            Это - главный сайдбар.
        @show

        <div class="container">
        <div style="clear: both"></div>

            @yield('content')
        </div>
    </body>
</html>
