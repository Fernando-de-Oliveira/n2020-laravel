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

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    </head>
    <body>
        <div class="position-ref full-height">
        @if (Route::has('login'))
        <header class="head__landing">
            <div class="wrapper space-between head__line">
                <div class="left logo links">
                    <a href="#">N2020</a>
                </div>
                <div class="right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            </div>
        </header>
        @endif
        <section class="landing__banner">
            <span class="slogan"><p>Slogan com um possivel trocadilho kkkk</p></span>
            <span class="subtitulo"><p>subtitulo pro slogan kkkkkk</p></span>
        </section>
        <section class="landing__slider">
            <div class="landing__slider--container">
                <div class="landing__slide">
                    <h2 class="landing__slide--title">Você pode escolher fazer atividades em grupo ou sozinho, se preferir.</h2>
                    <figure>
                        <img src="{{ asset('images/slide-0.png') }}" alt="celular">
                    </figure>
                </div>
                <div class="landing__slide">
                    <h2 class="landing__slide--title">Diversas atividades para você e seus amigos</h2>
                    <figure>
                        <img src="{{ asset('images/slide-1.png') }}" alt="celular">
                    </figure>
                </div>
                <div class="landing__slide">
                    <h2 class="landing__slide--title">Passo a passo detalhado</h2>
                    <figure>
                        <img src="{{ asset('images/slide-2.png') }}" alt="celular">
                    </figure>
                </div>
                <div class="landing__slide">
                    <h2 class="landing__slide--title">Compartilhe e troque experiências</h2>
                    <figure>
                        <img src="{{ asset('images/slide-3.png') }}" alt="celular">
                    </figure>
                </div>
            </div>
        </section>
            <!-- <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div> -->

        </div>
        <!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>

        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    </body>
</html>
