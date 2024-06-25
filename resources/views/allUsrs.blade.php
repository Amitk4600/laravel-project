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
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>All users</h1>
                <table class="table table-boarderd table-striped">
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>email</th>
                        <th>view</th>
                        <th>delete</th>
                    </tr>
                    @foreach ($data as $id => $user)
                        <tr>

                            <td> {{ $user->id }}</td>
                            <td> {{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                           
                            <td><a href="{{ route('update_new', ['id' => $user->id]) }}"
                                    class="btn btn-primary btn-sm">update</a>
                            <td><a href="{{ route('update.User', $user->id) }}" class="btn btn-danger btn-sm">delete</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
                <a href="{{ route('home') }}" class="btn  btn-primary btn-sm mt-4">home</a>
            </div>
        </div>
    </div>
</body>

</html>
