<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Login</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            height: 100vh;
            width: 100vw;
            font-weight: 700;
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #555;
            background-color: #f6f6f6;
        }

        .login-div {
            width: 430px;
            height: 700px;
            padding: 60px 35px 35px;
            border-radius: 40px;
            background-color: #ecf0f3;
            box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
        }

        .logo {
            background: url('../img/1200px-Purple_(01).png');
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 0 auto;
            box-shadow: 0px 0px 2px #5f5f5f, 0px 0px 0px 5px #ecf0f3, 8px 8px 15px #afaaa7, -8px -8px 15px #fff;
        }

        .title {
            text-align: center;
            font-size: 28px;
            padding-top: 24px;
            letter-spacing: 0.5px;
        }

        .sub-title {
            text-align: center;
            font-size: 15px;
            padding-top: 7px;
            letter-spacing: 3px;
        }

        .fields {
            width: 100%;
            padding: 75px 5px 5px;
        }

        .fields input {
            border: none;
            outline: none;
            background: none;
            font-size: 18px;
            color: #555;
            padding: 20px 10px 20px 5px;
        }

        .email,
        .password {
            margin-bottom: 30px;
            border-radius: 25px;
            box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
        }

        .fields svg {
            height: 22px;
            margin: 0 10px -3px 25px;
        }

        .signin-button {
            outline: none;
            border: none;
            cursor: pointer;
            width: 100%;
            height: 60px;
            border-radius: 30px;
            font-size: 20px;
            font-weight: 700;
            font-family: Arial, Helvetica, sans-serif;
            color: #fff;
            text-align: center;
            background-color: #02c8db;
            box-shadow: 3px 3px 8px #b1b1b1, -3px -3px 8px #fff;
            transition: all 0.5s;
        }

        .signin-button:hover {
            background-color: #50e5b9;
        }

        .link {
            padding-top: 20px;
            text-align: center;
        }

        .link a {
            text-decoration: none;
            color: #aaa;
            font-size: 15px;
        }

        .forget {
            transition: all ease .5s;
        }

        .forget:hover {
            color: #02c8db;
        }
        label.checkbox{
            display: block;
            color: #aaa;
            margin-left: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <html lang="en">

    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>

    <body>
        <div class="login-div">
            <div class="logo"></div>
            <div class="d-flex justify-content-center align-items-center">
                <div class="mt-5">
                    <h1 style="text-align: center">Welcome Back !</h1>
                </div>
                <div class="title">Login</div>
            </div>
            <form class="fields" action="{{ route('login.action') }}" method="POST">
                @csrf
                <input type="hidden" name="guard" value="web">
                <div class="email">
                    <svg className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <input type="email" class="user-input" placeholder="Email" name="email">
                </div>
                <div class="password">
                    <svg className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                    <input type="password" class="pass-input" placeholder="Password" name="password">
                </div>

                <label class="checkbox">
                    <input type="checkbox" name="remember">
                    Remember me
                </label>
                <button class="signin-button">Login</button>
            </form>
            <div class="link">
                <a href="#" class="forget">Forget password?</a> or <a class="forget" href="#">Sign Up</a>
            </div>
        </div>
    </body>

    </html>


</body>

</html>
