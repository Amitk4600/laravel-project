<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <title>login</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>Login</h1>
                <form action="{{ route('login_user') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">password</label>
                        <input type="password" class="form-control" name="password" id="">
                    </div>
                    <div class="mb-2 d-flex justify-content-between align-items-center">
                        <label for="" class="form-label">remember me</label>
                        <input type="checkbox" name="rememberme" id="">
                    </div>
                    <button class="btn btn-primary" type="submit">login</button>
                </form>
                <div class="d-flex justify-content-center  ">
                    <p class="text-center me-1"> if You don't have Account </p><a
                        href="{{ url('/registrationUser') }}"> sign up</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
