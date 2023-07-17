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
<h1 style="text-align: center">Modify "{{$movie['title']}}"</h1>
<form action="{{url('/update/'.$movie['id'])}}" method="get">
    <div class="form-group">
        <label for="exampleInputEmail1" style="text-align: center; font-weight: bold; font-size: 25px">Title</label>
        <input type="text" class="form-control" name="title"  value="{{$movie['title']}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1" style="text-align: center; font-weight: bold; font-size: 25px">Description</label>
        <input type="text" class="form-control"  name="description" value="{{$movie['description']}}">
    </div>
    <div class="form-group form-check">

    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{url('/')}}" class="btn btn-danger" >Go Back</a>

</form>
</body>
</html>
