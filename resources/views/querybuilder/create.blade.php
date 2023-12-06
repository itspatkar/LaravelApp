<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Add Student</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <h2 class="p-5 text-center">Add New Student</h2>

        <div class="container mx-5">
            <form method="post" action="{{ route('create') }}">
                @csrf
                <div class="input-group mb-3">
                    <td><label class="input-group-text" for="name"><b>Name</b> </label></td>
                    <td><input class="form-control" type="text" name="name" autofocus required></td>
                </div>
                <div class="input-group mb-3">
                    <td><label class="input-group-text" for="email"><b>Email</b> </label></td>
                    <td><input class="form-control" type="email" name="email" required></td>
                </div>
                <div class="input-group mb-3">
                    <td><label class="input-group-text" for="age"><b>Age</b> </label></td>
                    <td><input class="form-control" type="number" name="age" required></td>
                </div>
                <div class="input-group mb-3">
                    <td><label class="input-group-text" for="city"><b>City</b> </label></td>
                    <td><input class="form-control" type="text" name="city" required></td>
                </div>

                <div>
                    <input type="submit" class="btn btn-success btn-sm" name="submit" value="Submit">
                    <a type="button" class="btn btn-info btn-sm" href="{{ route('index') }}">Home</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
