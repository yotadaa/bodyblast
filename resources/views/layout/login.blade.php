<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #ff895e;
        }

        .login-form {
            display: flex;
        }

        .container {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center
        }

        .img {
            max-width: 500px;
            width: 100%;
            border-radius: 15px;
            border-top-right-radius: 1px;
            border-bottom-right-radius: 1px;
        }

        .form-display {
            background-color: white;
            margin: 0;
            padding: 50px 0;
            padding-left: 50px;
            padding-right: 150px;
            border-top-right-radius: 15px;
            border-bottom-right-radius: 15px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
            gap: 5px;
            width: 100%;
        }

        .form-display input {
            width: 100%;
        }
    </style>
</head>

<body>
    <section class="container">
        <div class="login-form">
            <img src="img/main.jpg" class="img-fluid img" alt="Phone image">
            <form action="{{ route('actionlogin') }}" class="form-display" method="post">
                @csrf
                <h1>Login Form</h1><br>
                @if (session('error'))
                    <div class="alert alert-danger">
                        <b>Opps!</b> {{ session('error') }}
                    </div>
                @endif
                <div class="">
                    <label class="form-label" for="form1Example13">Email address : </label>
                    <input type="email" id="form1Example13" class="form-control form-control-lg" name="email" />
                </div>

                <!-- Password input -->
                <div class="form-outline ">
                    <label class="form-label" for="form1Example23">Password :</label>
                    <input type="password" id="form1Example23" class="form-control form-control-lg" name="password" />
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>

                <div class="divider d-flex align-items-center my-4">
                    <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                </div>
                <div>
                    <p class="mb-0">Don't have an account? <a href="/register" class="text-black-50 fw-bold">Sign
                            Up</a>
                    </p>
                </div>
            </form>
        </div>
    </section>

</body>

</html>
