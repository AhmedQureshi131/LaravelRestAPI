<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Rest API</title>
    <link href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
<h1 style="text-align: center">Star Wars Movies</h1>
<center><a href="{{url('/fetchData')}}" class="btn btn-primary" style="text-align: center;margin-bottom: 5px" >Fetch Movies Data</a></center>
@if (session('status'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong style="color: #000000">Hey! {{session('status')}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
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
            <a href="{{url('/delete/'.$m['id'])}}" class="btn btn-danger" style="margin-top: 5px"> Delete</a>

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
