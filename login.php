<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Agency</title>
    <!-- ============================================Bootstrap Link============================================ -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- ============================================Bootstrap Link END============================================ -->

    <!-- ============================================Fa-Fa icon Link============================================ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- ============================================External CSS Link============================================ -->
    <link rel="stylesheet" href="style.css">

    <style>
        section {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100vh;
            background: url('image/bg.jpg') no-repeat;
            background-size: cover;
            background-position: center;
            margin: 0px;
            animation: animateBg 5s linear infinite;
        }

        @keyframes animateBg {
            100% {
                filter: hue-rotate(360deg)
            }
        }

        .wrapper {
            position: relative;
            width: 400px;
            height: 450px;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, .5);
            box-shadow: 0 0 30px rgba(0, 0, 0, .5);
            border-radius: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            backdrop-filter: blur(20px);
            overflow: hidden;
            transition: height .2s ease;
        }

        .wrapper.active {
            height: 520px;
        }

        .wrapper .form-box {
            width: 100%;
            padding: 40px;
        }

        .wrapper .form-box.login {
            transition: transform .18s ease;
            transform: translateX(0);
        }

        .wrapper.active .form-box.login {
            transition: none;
            transform: none;
            transform: translateX(-400px);
        }

        .wrapper.active .form-box.register {
            transition: transform .18s ease;
            transform: translateX(0);
        }

        .wrapper .form-box.register {
            position: absolute;
            transform: translateX(400px);
        }

        .wrapper .icon-close {
            position: absolute;
            top: 0;
            right: 0;
            width: 45px;
            height: 45px;
            background-color: #fff;
            font-size: 2em;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            border-bottom-left-radius: 20px;
            cursor: pointer;
            z-index: 1;
        }

        .wrapper .form-box h2 {
            font-size: 2em;
            color: #fff;
            text-align: center;
        }

        .input-box {
            position: relative;
            width: 100%;
            height: 50px;
            border-bottom: 2px solid #fff;
            margin: 30px 0px;
        }

        .input-box label {
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            font-size: 1em;
            color: #fff;
            font-weight: 500;
            pointer-events: none;
            transition: .5s;
        }

        .input-box input:focus~label,
        .input-box input:valid~label {
            top: -5px;
        }

        .input-box input {
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            font-size: 1em;
            color: #fff;
            font-weight: 600;
            padding: 0 35px 0 5px;
        }

        .input-box .icon {
            position: absolute;
            right: 8px;
            font-size: 1.2em;
            color: #fff;
            line-height: 57px;
        }





        .remember-forget {
            margin: -15px 0px 15px;
            font-size: .9em;
            font-weight: 500;
            color: #fff;
            display: flex;
            justify-content: space-between;
        }

        .remember-forget label input {
            margin-right: 3px;
            accent-color: #fff;
        }

        .remember-forget a {
            color: #fff;
            text-decoration: none;
        }

        .remember-forget a:hover {
            text-decoration: underline;
        }

        .button-form {
            width: 100%;
            height: 40px;
            border: none;
            outline: none;
            background-color: #fff;
            border-radius: 40px;
            cursor: pointer;
            font-size: 1em;
            color: #000;
            font-weight: 500;
        }

        .login-register {
            font-size: .9em;
            color: #fff;
            text-align: center;
            margin: 25px 0 10px;
            font-weight: 500;
        }

        .login-register p a {
            color: #fff;
            font-weight: 600;
            text-decoration: none;
        }

        .login-register p a:hover {
            text-decoration: underline;
        }

        @media (max-width:360px) {
            .login-box {
                width: 100%;
                height: 100vh;
                border: none;
                border-radius: 0;
            }

            .input-box {
                width: 290px;
            }
        }
    </style>
</head>

<body>

    <!-- Header Link -->
    <?php include 'header.php'; ?>




    <section>
        <div class="wrapper">
            <div class="form-box login">
                <h2>Login</h2>
                <form action="#">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="email" required>
                        <label>Email</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" required>
                        <label>Password</label>
                    </div>

                    <div class="remember-forget">
                        <label><input type="checkbox"> Remember me</label>
                        <a href="#">Forget Password?</a>
                    </div>
                    <button class="button-form" type="submit">Login</button>
                    <div class="login-register">
                        <p>Don't have an account ?<a href="#" class="register-link">Register</a></p>
                    </div>
                </form>
            </div>

            <div class="form-box register">
                <h2>Register</h2>
                <form action="#">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="person"></ion-icon></span>
                        <input type="text" required>
                        <label>Username</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="email" required>
                        <label>Email</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" required>
                        <label>Password</label>
                    </div>

                    <div class="remember-forget">
                        <label><input type="checkbox"> I am agree to the terms & conditions</label>
                    </div>
                    <button class="button-form" type="submit">Register</button>
                    <div class="login-register">
                        <p>Already have an account ?<a href="#" class="login-link">Login</a></p>
                    </div>
                </form>
            </div>

        </div>
    </section>







    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        const wrapper = document.querySelector('.wrapper');
        const loginLink = document.querySelector('.login-link');
        const registerLink = document.querySelector('.register-link');
        const btnPopup = document.querySelector('.btnLogin-popup');
        const iconClose = document.querySelector('.icon-close');

        registerLink.addEventListener('click', () => {
            wrapper.classList.add('active');
        });

        loginLink.addEventListener('click', () => {
            wrapper.classList.remove('active');
        });
    </script>
</body>

</html>