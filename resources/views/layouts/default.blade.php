<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@4.7.0/css/fontawesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" 
    integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" 
    integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">



    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ page_title($title) ?? '' }}</title>
    <style>
        .lara{
            padding-top: 70px;
            text-align: center;
            
        }
        footer{
        margin-top: 4em;
        margin-bottom: 4em;
    }
    </style>
</head>
<body>
    @yield('content')
    <div class="container">
        <div class="lara">
        @if(session()->has('notification.message'))
        <div class="alert alert-{{ session()->get('notification.type') }}">
            {{ session('notification.message') }}
        </div>
        @endif
        </div>
        
    </div>

    @include('layouts/partials/_nav')

    @include('layouts/partials/_footer')

    <script src="//code.jquery.com/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" 
    integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
    </script>

    
</body>
</html>