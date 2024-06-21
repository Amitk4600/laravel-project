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
    <title>Add</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>update User</h1>
                <a href="{{ route('home') }}" class="btn  btn-primary btn-sm mt-4">home</a>
                <form action="{{ route('update_User') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $user->id }}">

                    <div class="mb-3">
                        <label for="" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">age</label>
                        <input type="text" class="form-control" name="age" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">city</label>
                        <input type="text" class="form-control" name="city" id="">
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>

                </form>
            </div>
        </div>
    </div>
</body>

</html>