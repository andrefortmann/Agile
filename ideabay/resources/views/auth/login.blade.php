<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{{ asset('assets/favicon.ico') }}}">
    <title>Ideabay</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src={{ asset('js/app.js') }} defer></script>
</head>

<body>
    <div id="login-container">
        <div class="row">
            <div class="col login-banner">
                <div class="d-flex justify-content-center align-items-center">
                    <div>
                        <h1>Ideabay</h1>
                        <p>We bring investors and entrepreneurs together. <br> Start sharing your ideas today!</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex justify-content-center align-items-center">
                    <form class="form-signin" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-5">
                            <h2>Welcome</h2>
                            <h2>Sign in to Ideabay</h2>
                        </div>
                        <div class="mb-3">
                            <span>Enter Details</span>
                        </div>
                        <div class="form-label-group">
                            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required>
                            <label for="email">Email</label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-label-group">
                            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                            <label for="password">Password</label>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Log In</button>
                        <p class="mt-5">Don't have an account? <a href="{{ route('register') }}">Sign up</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>