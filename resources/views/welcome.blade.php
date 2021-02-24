<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LP-Gallery</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="public/img/favicon.ico" type="image/x-icon">
        
        <!-- Styles -->
        <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
        <style>
            html, body {
                color: #fafafa;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background: radial-gradient(#510270, #44025e);
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #fafafa;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            h1 {
                font-weight: 700;
            }

            p {
                font-weight: 400;
            }

            p.p-home {
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <div class="container">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        
            <div class="content">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="http://localhost/gallery/public/img/landing.png" alt="landing" width="450px">
                    </div>
                    <div class="col-lg-6 m-auto">
                        <h1>Welcome to the<br/> Laravel Photo Gallery</h1>
                        <p class="p-home">For using this photo gallery, you have to register yourself and after that login to be able to create galleries and upload photos</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>
