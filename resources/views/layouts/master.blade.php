<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <style>
            html, body {
                width: 700px ;
                margin-left: auto ;
                margin-right: auto ;
                height: 100%;
            }

            .preformatted {
                font-family: monospace;
                white-space: pre-wrap;
            }
        </style>
    </head>
    <body>
        <div class="preformatted">
          @yield('content')
        </div>
    </body>
</html>
