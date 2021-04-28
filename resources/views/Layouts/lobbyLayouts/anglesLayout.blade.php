<!DOCTYPE html>
<html>
<head>
    <title>Bridges App</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('angles') }}">Angle Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('angles') }}">View All Angles</a></li>
        <li><a href="{{ URL::to(route('angles.create')) }}">Create an Angle</a>
    </ul>
</nav>



<!-- if there are creation errors, they will show here -->


	@yield("content");




</div>
</body>
</html>