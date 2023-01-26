<html>
    <head>
        <title>App Name - @yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }

            label, input[type="submit"] {
                display:inline-block;
                margin-top:20px;
            }

            h1,.form{
                margin-left:100px;
            }
        </style>
    </head>
    <body>
        <div class="form">
            @yield('form')
        </div>
 
        <div class="table">
            @yield('table')
        </div>
    </body>
</html>