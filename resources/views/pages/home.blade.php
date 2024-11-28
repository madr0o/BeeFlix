<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BeeFlix</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .btn-custom {
            background-color: #7d51b5;
            border-color: #7d51b5;
            color: white;
        }
        
        .btn-custom:hover {
            background-color: #3d1d53; 
            border-color: #3d1d53;
            color: white;
        }
        .card-custom {
            width: 18rem; 
            height: 42rem; 
        }
        </style>        
</head>
<body class="m-0 p-0">
    <nav class="navbar bg-body-tertiary p-2 sticky-top">
        <div class="container">
          <a class="navbar-brand" href="{{route('film')}}">
            <img src="{{asset('images\Beeflix.svg')}}" alt="BeeFlix" width="14%" height="14%">
          </a>
        </div>
      </nav>

    <div class="d-flex flex-column align-items-center pt-4">
        <img src="{{asset('images\bdyimg.svg')}}" alt="BeeFlix" width="40%" height="40%">

        @yield('content')
    </div>

    <footer style="background-color: #3d1d53" class="">
        <div class="container d-flex py-2 align-items-center justify-content-end">
            <h6 style="color: white" class="">@Dzaky AR</h6>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>