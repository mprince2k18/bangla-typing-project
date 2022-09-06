<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <link rel="shortcut icon" href="{{ asset('backend/images/favicon.png') }}">
    <title>Login | {{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ asset('backend/assets/css/dashlite.css') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('backend/assets/css/theme.css') }}">

</head>

<body class="nk-body npc-default pg-auth">
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-wrap nk-wrap-nosidebar">
                <div class="nk-content justify-content-center">
                    <div class="nk-block-area nk-block-area-column bg-white">
                        <div class="absolute-top-right d-lg-none p-3 p-sm-5"><a
                                href="{{ route('frontend') }}"
                                class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em
                                    class="icon ni ni-info"></em></a></div>
                        <div class="nk-block nk-block-middle nk-auth-body">
                            <div class="brand-logo pb-5">
                                <a href="{{ route('frontend') }}" class="logo-link h4">
                                    {{ env('APP_NAME') }}
                                </a>
                            </div>
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <h5 class="nk-block-title">Sign-In</h5>
                                    <div class="nk-block-des">
                                        <p>Access the {{ env('APP_NAME') }} panel using your email and
                                            passcode.</p>
                                    </div>
                                </div>
                            </div>
                            <form action="{{ route('login') }}" method="POST"
                                class="form-validate is-alter" autocomplete="off">
                                @csrf
                                <div class="form-group">
                                    <div class="form-label-group"><label class="form-label"
                                            for="email-address">Email</label>
                                    </div>
                                    <div class="form-control-wrap"><input autocomplete="off" type="email"
                                            value="{{ old('email') }}"
                                            class="form-control form-control-lg @error('email') is-invalid @enderror"
                                            name="email" required id="email-address"
                                            placeholder="Enter your email address">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-label-group"><label class="form-label"
                                            for="password">Passcode</label><a class="link link-primary link-sm"
                                            tabindex="-1"
                                            href="{{ route('password.request') }}">Forgot Code?</a>
                                    </div>
                                    <div class="form-control-wrap"><a tabindex="-1" href="#"
                                            class="form-icon form-icon-right passcode-switch lg"
                                            data-target="password"><em
                                                class="passcode-icon icon-show icon ni ni-eye"></em><em
                                                class="passcode-icon icon-hide icon ni ni-eye-off"></em></a><input
                                            autocomplete="new-password" name="password" type="password"
                                            class="form-control form-control-lg @error('password') is-invalid @enderror"
                                            required id="password" placeholder="Enter your passcode">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group"><button type="submit"
                                        class="btn btn-lg btn-primary btn-block">Sign in</button></div>
                            </form>
                            <div class="form-note-s2 pt-4"> New on our platform? <a
                                    href="{{ route('register') }}">Create an account</a></div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


</html>
