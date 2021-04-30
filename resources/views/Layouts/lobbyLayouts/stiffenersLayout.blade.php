<!DOCTYPE html>
<html>
<head>
    <title>stiffener App</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <style type="text/css">
        .input-links-0{

            margin-left: 50px;
        }
        .input-links-1{

            margin-left: 100px;
        }
        .input-links-2{

            margin-left: 150px;
        }
        .input-links-3{

            margin-left: 200px;
        }
        .input-links-4{

            margin-left: 250px;
        }
        .input-links-5{

            margin-left: 300px;
        }
        .input-links-6{

            margin-left: 350px;
        }


    </style>
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('stiffeners') }}">stiffener Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('stiffeners') }}">View All stiffeners</a></li>
        <li><a href="{{ URL::to(route('stiffeners.create')) }}">Create a stiffener</a>
    </ul>
</nav>



<!-- if there are creation errors, they will show here -->


    @yield("content")

<a class="input-links-0" href="{{ route('bridges.index') }}">Bridges</a><br>
    <a class="input-links-1" href="{{ route('decks.index') }}">Decks</a><br>
        <a class="input-links-2" href="{{ route('girders.index') }}">Girders</a><br>
            <a class="input-links-3" href="{{ route('bays.index') }}">Bays</a><br>


</div>
</body>
</html>