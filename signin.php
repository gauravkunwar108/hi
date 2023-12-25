<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document | Login</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!-- Custom css -->
    <link rel="stylesheet" href="css/login_style.css">
</head>

<body>

    <div class="d-flex justify-content-center">
        <div id="error-box">
            <i class="bi bi-exclamation-circle"></i> Please Enter Valid Credentials!
        </div>
    </div>

    <section id="home">
        <div class="loginform" id="login-form">
            <h4 class="form-title">Login to the admin panel.</h4>
            <p class="form-desc">Enter email and password</p>

            <div class="input-box email w-100">
                <input type="text" placeholder="Enter Email/Phone No." class="form-control-plaintext" id="inputEmail">

            </div>
            <div class="input-box passcode w-100">
                <input type="password" placeholder="Passcode" class="form-control-plaintext" id="inputPassword">
                <div id="show-hide">
                    <i class="bi bi-eye-slash" onclick="showHidePasscode(true, 0)"></i>
                </div>
            </div>

            <button class="btn btn-primary login-button w-100" onclick="login()">Log in</button>

        </div>
    </section>

    <script src="js/app.js"></script>
</body>

</html>