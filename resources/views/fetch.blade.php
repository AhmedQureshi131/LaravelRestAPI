<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Rest API</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
</head>

<body>
<h1 style="text-align: center;margin-top: 60px">Fetch Star Wars Movies Data</h1>
<center><a href="{{url('/fetchTMDB')}}" class="btn btn-primary" style="text-align: center;margin-bottom: 5px" >Fetch TMDB Movies</a>
    <a href="{{url('/fetchSWAPI')}}" class="btn btn-primary" style="text-align: center;margin-bottom: 5px" >Fetch SWAPI Movies</a>
    <a href="{{url('/')}}" class="btn btn-danger" style="text-align: center;margin-bottom: 5px" >Go Back</a>
</center>

</body>
</html>
