<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="centering">
        <h1>La~Notes</h1>
        <form action="/register" method="post" class="form">
            @csrf
            <div class="login__title">
                <h1>Register</h1>
            </div>
            <div class="box">
                <div class="input__wrapper">
                    <input id="name" name="name" type="text" class="input__field" placeholder="Your Name"
                        required value="{{ old('name') }}">
                    <label for="name" class="input__label">Name</label>
                    <!-- <img alt="Email Icon" title="Email Icon" src="img/email.svg" class="average__icon"> -->
                </div>
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="input__wrapper">
                    <input id="email" name="email" type="email" class="input__field" placeholder="Your Email"
                        required value="{{ old('email') }}">
                    <label for="email" class="input__label">Email</label>
                    <img alt="Email Icon" title="Email Icon" src="img/email.svg" class="average__icon">
                </div>
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="input__wrapper">
                    <input id="password" name="password" type="password" class="input__field"
                        placeholder="Your Password" required>
                    <label for="password" class="input__label">Password</label>
                    <img alt="Eye Icon" title="Eye Icon" src="img/eye.svg" class="input__icon">
                </div>
                @error('password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <button type="submit" class="form__button" value="login">Create Account</button>
                <div class="form__signup">
                    <a href="/login" title="Create Account">Back to Login</a>
                </div>
            </div>
        </form>
    </div>


    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
