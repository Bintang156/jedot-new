<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login / Sign Up Form</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="container">
        <form class="form" id="login">
            <h1 class="form__title">Login</h1>
            
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Username atau Email">
                
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Password">
              
            </div>
            
            <button class="form__button" onclick="location.href='/';" type="submit">Selesai</button>
        
            <p class="form__text">
                <a href="#" class="form__link">Lupa password?</a>
            </p>
            <p class="form__text">
                <a class="form__link" href="./" id="linkCreateAccount">Belum punya Akun? Register Akun</a>
            </p>
        </form>
        <form class="form form--hidden" id="createAccount">
            <h1 class="form__title">Register</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" id="signupUsername" class="form__input" autofocus placeholder="Username">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Alamat Email">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Password">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Confirm password">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit">Selesai</button>
            <p class="form__text">
                <a class="form__link" href="./" id="linkLogin">Sudah Punya Akun? Sign in</a>
            </p>
        </form>
    </div>
    <script src="js/main.js"></script>
</body>
