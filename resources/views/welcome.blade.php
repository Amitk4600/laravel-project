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
    <title>Home</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                {{-- <a href="{{ route('add_new') }}" class="btn  btn-success btn-sm mt-4">Add</a> --}}
                <a href="{{ route('displayUser') }}" class="btn  btn-primary btn-sm mt-4">display</a>
                <h3>crud Operation
                </h3>
                <form action="{{ route('logout_user') }}" method="post">
                    @csrf
                    <button type="submit" class="btn  btn-danger btn-sm mt-4">logout</button>
                </form>
                <div class="cookie">
                    <h3>Cookie Section</h3>
                    {{-- Check if 'Useremail' cookie is set --}}
                    @if(request()->cookie('Useremail'))
                        <p>This page contains a cookie.</p>
                    @else
                        <p>This page doesn't contain a cookie.</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</body>

</html>
