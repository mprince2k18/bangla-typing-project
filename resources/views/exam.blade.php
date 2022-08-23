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

            .disable-text-selection {
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
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
                    
                    <span class="navbar-text">
                       @if (Route::has('login'))
                            @auth
                                <a href="{{ route('home') }}" class="nav-link">{{ Auth::user()->name }}</a>
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
                    <h1 class="fs-1 text queue_text">The test will be start in <span id="queue_timer">5</span> seconds</h1>
                    <h1 class="fs-1 text d-none" id="timer">00:00</h1>
                </div>
            </section>

            <section class="mt-2">
                <div class="container justify-content-center d-flex">
                    <h5 class="fs-5 text text-center disable-text-selection"
                    onselectstart="return false"
                            oncut="return false"
                            oncopy="return false"
                            onpaste="return false"
                            ondrag="return false"
                            ondrop="return false">
                        {{ $chapter->paragraph }}
                    </h5>
                </div>
            </section>

            <section class="mt-2">
                <div class="container text-center m-auto">
                    <form action="{{ route('examResult', $chapter->id) }}" method="post" id="exam-form">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label fs-5 text">Start Typing From Below</label>
                            <textarea id="input_area" disabled name="paragraph" class="form-control" rows="7" placeholder="Start typing...."
                            oncut="return false"
                            oncopy="return false"
                            onpaste="return false"
                            ondrag="return false"
                            ondrop="return false"></textarea>
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

        <input class="test_time" type="hidden" value="{{ $chapter->time }}">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="{{ asset('quick.jquery.bangla.js') }}"></script>

        <script>
            $('#input_area').bangla();
            $('#input_area').bangla('enable', true); // enable bangla typing

            var queue_timer = 5; // queue timer
                var queue_minutes = parseInt(queue_timer / 60, 10);
                var queue_seconds = parseInt(queue_timer % 60, 10);
                var queue_display = queue_minutes + ":" + queue_seconds;
                $('#timer').text(queue_display);
                var queue_interval = setInterval(function() {
                    queue_seconds--;
                    if (queue_seconds < 0) {
                        queue_minutes--;
                        queue_seconds = 59;
                    }
                    if (queue_minutes < 0) {
                        queue_minutes = 0;
                        queue_seconds = 0;
                    }
                    if (queue_minutes == 0 && queue_seconds == 0) {
                        clearInterval(queue_interval);
                        $('.queue_text').addClass('d-none');
                        $('#timer').removeClass('d-none');
                        $('#input_area').removeAttr('disabled');
                    }
                    var queue_display = queue_seconds;
                    $('#queue_timer').text(queue_display);
                }, 1000);

            // // start timer after 3 seconds

            setTimeout(function(){
                var timer = $('.test_time').val();
                var minutes = parseInt(timer / 60, 10);
                var seconds = parseInt(timer % 60, 10);
                var display = minutes + ":" + seconds;
                $('#timer').text(display);
                var interval = setInterval(function() {
                    seconds--;
                    if (seconds < 0) {
                        minutes--;
                        seconds = 59;
                    }
                    if (minutes < 0) {
                        minutes = 0;
                        seconds = 0;
                    }
                    if (minutes == 0 && seconds == 0) {
                        clearInterval(interval);
                        $('#exam-form').submit();
                    }
                    var display = minutes + ":" + seconds;
                    $('#timer').text(display);
                }, 1000);
            }, 5000);
        </script>

        <script>
                    // take body to change the content
const body = document.getElementsByTagName('body');
// stop keyboard shortcuts
window.addEventListener("keydown", (event) => {
  if(event.ctrlKey && (event.key === "S" || event.key === "s")) {
     event.preventDefault();
     
  }

  if(event.ctrlKey && (event.key === "C")) {
     event.preventDefault();
     body[0].innerHTML = "sorry, you can't do this 💔"
  }
  if(event.ctrlKey && (event.key === "E" || event.key === "e")) {
     event.preventDefault();
     body[0].innerHTML = "sorry, you can't do this 💔"
  }
  if(event.ctrlKey && (event.key === "I" || event.key === "i")) {
     event.preventDefault();
     body[0].innerHTML = "sorry, you can't do this 💔";
  }
  if(event.ctrlKey && (event.key === "K" || event.key === "k")) {
     event.preventDefault();
     body[0].innerHTML = "sorry, you can't do this 💔";
  }
  if(event.ctrlKey && (event.key === "U" || event.key === "u")) {
     event.preventDefault();
     body[0].innerHTML = "sorry, you can't do this 💔";
  }
});
// stop right click
document.addEventListener('contextmenu', function(e) {
  e.preventDefault();
});
        </script>

    </body>
</html>
