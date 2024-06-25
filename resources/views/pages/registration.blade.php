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
    <title>Registration</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                @if (session('sucess'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <h1>Registration User</h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>

                @endif
                <form action="{{ route('register_user') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="" required>
                       
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="" required>
                    
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">password</label>
                        <input type="password" class="form-control" name="password" id="">
                    </div>
                    <button class="btn btn-primary" type="submit">sign up</button>
                    <div class="d-flex justify-content-center  ">
                        <p class="text-center me-1"> already Account </p><a href="{{ url('loginUser') }}"> log in</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
