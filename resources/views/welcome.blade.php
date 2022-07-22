<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
     
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="https://getbootstrap.com/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Ranking</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                       @if (Route::has('login'))
                            @auth
                                <a href="{{ route('home') }}" class="nav-link">Home</a>
                            @else
                                <a href="{{ route('login') }}" class="nav-link">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="nav-link">Register</a>
                                @endif
                            @endauth
                        @endif
                    </span>
                    </div>
                </div>
            </nav>

            <section class="mt-2">
                <div class="justify-content-center d-flex">
                    <h1 class="fs-1 text">00:20</h1>
                </div>
            </section>

            <section class="mt-2">
                <div class="container justify-content-center d-flex">
                    <h5 class="fs-5 text">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Quam reprehenderit, quis laboriosam cumque ipsa voluptas soluta laborum ex harum dicta culpa, 
                        optio molestiae deleniti cum quasi voluptatum ullam, quo quae.
                    </h5>
                </div>
            </section>

            <section class="mt-2">
                <div class="container text-center m-auto">
                    <form action="#" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label fs-5 text">Start Typing From Below</label>
                            <textarea id="input_area" name="paragraph" class="form-control" rows="7" placeholder="Start typing...."></textarea>
                        </div>
                    
                        <button type="submit" class="btn btn-secondary">End Test</button>
                    </form>
                </div>
            </section>

            <section class="mt-2">
                <div class="container text-center m-auto">
                    <img src="{{ asset('keyboard.jpg') }}" alt="keyboard">
                </div>
            </section>

        </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="{{ asset('quick.jquery.bangla.js') }}"></script>

        <script>
            $('#input_area').bangla();
            $('#input_area').bangla('enable', true); // enable bangla typing
        </script>

    </body>
</html>
