<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wave - Sign up</title>

    <!-- Link CSS -->
    <link rel="stylesheet" href="sign_in.css">

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="font/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="box-container row">
        <div class="box_sign-in col-5">
            <h1>sign in</h1>
            <form action="sign_in.php" method="post">
                <label>Email <br>
                    <input type="email" name="email" id="email" required>
                </label>
                <label>Password <br>
                    <input type="password" name="password" id="password" required>
                </label>
                <label>Name <br>
                    <input type="text" name="name" id="name" required>
                </label>
                <label>Birthday <br>
                    <input type="date" name="birthday" id="birthday" required>
                </label>
                <label id="checkbox_label">
                    <input type="checkbox" name="checkbox" id="checkbox" required>
                    <p>By continuing, you agree to WaveM Company’s <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>.</p>
                </label>
                <input type="submit" name="submit" value="Sign in">
            </form>
            <div class="other-method">
                <p>Or continue with</p>
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-google"></i></a>
            </div>
        </div>
        <div class="logo col-7">
            <img src="images/logo.svg" alt="">
        </div>
    </div>



    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>