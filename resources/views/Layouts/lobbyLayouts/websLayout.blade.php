<!DOCTYPE html>
<html>
<head>
    <title>web App</title>
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
        <a class="navbar-brand" href="{{ URL::to('webs') }}">web Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('webs') }}">View All webs</a></li>
        <li><a href="{{ URL::to(route('webs.create')) }}">Create a web</a>
    </ul>
</nav>



<!-- if there are creation errors, they will show here -->


    @yield("content")


<a class="input-links-0" href="{{ route('bridges.index') }}">Bridges</a><br>
    <a class="input-links-1" href="{{ route('decks.index') }}">Decks</a><br>
        <a class="input-links-2" href="{{ route('girders.index') }}">Girders</a><br>

</div>
</body>
</html>