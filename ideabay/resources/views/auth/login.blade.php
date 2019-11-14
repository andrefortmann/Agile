<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{{ asset('assets/favicon.ico') }}}">
    <title>IdeaBay</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src={{ asset('js/app.js') }} defer></script>
</head>

<body>
    <div id="login-container">
        <div class="row">
            <div class="col login-banner">
                <div class="d-flex flex-column justify-content-center d-flex justify-content-center">
                    <h1>Ideabay</h1>
                    <p>The only platform that brings investors and entrepreneurs together. Sign up now to use all features!</p>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column justify-content-center d-flex justify-content-center">
                    <form class="form-signin" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="text-center mb-4">
                            <img class="mb-4" src="" alt="" width="72" height="72">
                            <h1 class="h3 mb-3 font-weight-normal">Start sharing your ideas!</h1>
                        </div>
                        <div class="form-label-group">
                            <input type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required>
                            <label for="inputEmail">Email</label>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-label-group">
                            <input type="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                            <label for="inputPassword">Password</label>
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Log In</button>
                        <p class="mt-5">New to Ideabay? <a href="{{ route('register') }}">{{ __('Register') }}">Create an account.</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>