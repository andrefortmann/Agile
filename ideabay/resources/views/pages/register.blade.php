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
                    <form class="form-signin">
                        <div class="text-center mb-4">
                            <img class="mb-4" src="" alt="" width="72" height="72">
                            <h1 class="h3 mb-3 font-weight-normal">Start sharing your ideas!</h1>
                        </div>
                        <div class="form-label-group">
                            <input type="text" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
                            <label for="inputUsername">Username</label>
                        </div>
                        <div class="form-label-group">
                            <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
                            <label for="inputEmail">Email</label>
                        </div>
                        <div class="form-label-group">
                            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                            <label for="inputPassword">Password</label>
                        </div>
                        <div class="form-label-group">
                            <input type="password" id="inputPasswordRepeat" class="form-control" placeholder="Repeat Password" required>
                            <label for="inputPasswordRepeat">Repeat Password</label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
                        <p class="mt-5">Already have an account? <a href="/login">Log in.</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>