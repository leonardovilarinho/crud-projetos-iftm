<!DOCTYPE html>
<html>
    <head>
    	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Projects - @yield('title')</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> --}}

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            button {
                width: 100px;
                color: #fff;
                background-color: #636b6f;
                border: none;
            }

            button:hover {
                color: #636b6f;
                background-color: #fff;
                border: 1px solid #636b6f;
                transition: 0.8s;
                cursor: pointer;
            }

            input, label { min-width: 200px; max-width: 200px; }
            label { position: absolute; text-align: left; margin-left: -120px; }

            .description-top {
                float: right;
                margin-top: -120px;
                padding-right: 10px;
            }

            .description-bottom {
                float: right;
                margin-top: -50px;
                padding-right: 10px;
            }

            .price { letter-spacing: 1px; }

            .center { text-align: center; }

            .full-height { height: 100vh; }

            .position-ref { position: relative; }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content { padding: 30px 10px 0px 10px; }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .title * {
                padding: 2px 10px 2px 10px;
                color: #fff;
                background-color: #636b6f;
                border: none;
                font-size: 17px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .title *:hover {
                color: #636b6f;
                background-color: #fff;
                border: 1px solid #636b6f;
                transition: 0.8s;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <div class="position-ref full-height">
            <div class="top-right links">
                <a href="{{ url('/projects/create') }}">New project</a>
                <a href="{{ url('/projects') }}">My projects</a>
            </div>

            <div class="content">
                	@yield('content')

            </div>
        </div>
    </body>
</html>