<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" rel="stylesheet"/>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
</head>

<body>
<h1 style="text-align: center">Star Wars Movies</h1>
<table id="example" class="display" style="width:100%">
    <thead>
    <tr>

        <th>Movie Title</th>
        <th>Details</th>
        <th>Action</th>

    </tr>
    </thead>
    <tbody>
    @foreach($movies as $m)
    <tr>

        <td>{{$m['title']}}</td>
        <td>{{$m['description']}}</td>
        <td>
            <a href="{{url('/edit/'.$m['id'])}}" class="btn btn-primary"> Modify</a>
            <a href="" class="btn btn-danger"> Delete</a>

        </td>

    </tr>
    @endforeach


    </tbody>
    <tfoot>
    <tr>

        <th>Movie Title</th>
        <th>Details</th>
        <th>Action</th>

    </tr>
    </tfoot>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script>
    new DataTable('#example');
</script>
</body>
</html>
