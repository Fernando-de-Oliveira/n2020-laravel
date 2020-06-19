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
        <section class="landing__features">
            <div class="features__slider">
                <div class="features__slide">
                    <div class="left">
                        <span class="features__txt">
                            Grande acervo de atividades bla bla bla bla bla bla bla
                        </span>
                    </div>
                    <div class="right">
                        <figure>
                            <img src="{{ asset('images/slide-1.png') }}" alt="atividades">
                        </figure>
                    </div>
                </div>
                <div class="features__slide">
                    <div class="left">
                        <span class="features__txt">
                            Atividades em grupo, com seus amigos bla bla bla bla bla bla bla
                        </span>
                    </div>
                    <div class="right">
                        <figure>
                            <img src="{{ asset('images/feature-2.png') }}" alt="atividades">
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        <section class="landing__register">
            <h2>Voce pode fazer uma pré-inscrição aqui</h2>
            <div class="form">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="telefone" class="col-md-4 col-form-label text-md-right">{{ __('Telefone') }}</label>

                        <div class="col-md-6">
                            <input id="telefone" type="tel" class="form-control @error('telefone') is-invalid @enderror" name="telefone" value="{{ old('telefone') }}" required>

                            @error('telefone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirme a Senha') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Registre-se') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <section class="landing__aboutUs">
            <figure>
                <img src="{{ asset('images/about-us.png') }}" alt="Imagem">
            </figure>
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam praesentium nesciunt deserunt velit qui, veritatis numquam obcaecati, </span>
        </section>
        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    </body>
</html>
