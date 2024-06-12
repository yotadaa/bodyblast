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
            object-fit: cover;
            /* height: 500px; */
        }

        .form-display {
            background-color: white;
            margin: 0;
            padding: 20px 0;
            padding-left: 50px;
            padding-right: 150px;
            border-top-right-radius: 15px;
            border-bottom-right-radius: 15px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
            width: 100%;
            /* height: 500px; */
            /* overflow-y: scroll; */
        }
    </style>
</head>

<body>
    <section class="container">
        <div class="login-form">
            <img src="img/emas2.jpg" class="img-fluid img" alt="Phone image">
            <form class="form-display" action="{{ route('actionregister') }}" method="post">
                @csrf
                <h1>Register Form</h1><br>
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <!-- Name input -->
                <!-- Email input -->
                <div class=" ">
                    <label class="form-label" for="email">Email address</label>
                    <input type="email" id="email" class="form-control " name="email" required />
                </div>

                <!-- Password input -->
                <div class=" ">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" class="form-control " name="password" required />
                </div>

                <div class=" ">
                    <label class="form-label" for="nomor">No Handphone</label>
                    <input type="text" id="nomor" class="form-control " name="nomor" required />
                </div>
                <div class=" ">
                    <label class="form-label" for="username">Nama</label>
                    <input type="text" id="username" class="form-control " name="username" required />
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign up</button>

                <div class="divider d-flex align-items-center my-4">
                    <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                </div>
                <div>
                    <p class="mb-0">have an account? <a href="{{ route('login') }}" class="text-black-50 fw-bold">Sign
                            In</a>
                    </p>
                </div>
            </form>
        </div>
    </section>
</body>

</html>
