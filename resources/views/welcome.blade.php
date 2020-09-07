<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
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
                color: #636b6f;
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





            a:link {
                color: rgb(250, 177, 81);
                text-decoration: none;
            }
            a:visited {
                color: gray;
                text-decoration: none;
            }
            a:active {
                text-decoration: none
            }
            a:hover {
                color: blue;
                background-color: rgb(8, 116, 65);
                text-decoration: underline;
            }

            body{
                background: linear-gradient(rgb(8, 116, 65), rgb(250, 177, 81));
                /* background-color: rgb(8, 116, 65) */
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="row" style="justify-content: center">
            @if (Route::has('login'))
                <div class="top-right links" style="border: double; color: rgb(250, 177, 81); width: 350px; height: 50px; margin-right: 800px">
                    @auth
                        <a href="{{ url('/home') }}" style="width: 95px; co">Home</a>
                    @else
                        <a style="width: 55px" href="{{ route('login') }}"> Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

            <div class="content">
                <div class=" row col-sm-12 col-4 title m-b-md">
                    <div class="col-3 navbar-brand back-logo" style="height: 74px">
                        <style>
                        /* .resp {
                            height: 137px; width: 820px;
                            margin: -61px auto;
                        } */
                        img {
                            max-width: 70%;
                            padding: 15px;
                        }
                         .resp {
                            font-size: 2vh;
                            margin: 0 20px 25px 20px;
                            /* margin-right: 20px; */
                            /* margin-left: 20px; */
                        }
                        .bor{
                            border: outset;
                            height: 80px;
                            padding: 50px 50px 0 50px;
                            background: linear-gradient(rgb(250, 177, 81), rgb(8, 116, 65));
                            color: black;
                        }

                        </style>
                        <img class="resp img entra-block img-fluid img-height" style="" src="{{ asset('storage/logo/logoBeba.png')}}" alt="">
                      </div>
                </div>

                <br><br><br><br><br><br><br>

                <div class=" row bor resp col-lg-12 col-sm-8 col-4 card" style="margin-">
                  <strong > <h3 class="resp"> Bienvenido a BEBA el lugar donde te divertiras </h3> </strong>
                </div>
                {{-- <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> --}}
            </div>
        </div>
    </body>
</html>
