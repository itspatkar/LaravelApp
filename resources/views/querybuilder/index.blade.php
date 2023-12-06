<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Student</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="container">
            <h2 class="p-5 text-center">STUDENTS</h2>

            <div class="m-3">
                <a href="/querybuilder/createform" class="btn btn-primary btn-sm">Add Student</a>
                <a href="{{ route('truncate') }}" class="btn btn-danger btn-sm">Delete All</a>
            </div>

            <table class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>City</th>
                    <th>Actions</th>
                </tr>
                @foreach ($data as $id => $students)
                    <tr>
                        <td>{{ $students->id }}</td>
                        <td>{{ $students->name }}</td>
                        <td>{{ $students->email }}</td>
                        <td>{{ $students->age }}</td>
                        <td>{{ $students->city }}</td>
                        <td>
                            <a href="{{ route('read', $students->id) }}" class="btn btn-primary btn-sm">View</a>
                            <a href="{{ route('updateform', $students->id) }}" class="btn btn-warning btn-sm">Update</a>
                            <a href="{{ route('delete', $students->id) }}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
</body>

</html>
