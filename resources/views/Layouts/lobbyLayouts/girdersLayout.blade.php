<!DOCTYPE html>
<html>
<head>
    <title>girder App</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('girders') }}">girder Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('girders') }}">View All girders</a></li>
        <li><a href="{{ URL::to(route('girders.create')) }}">Create a girder</a>
    </ul>
</nav>



<!-- if there are creation errors, they will show here -->


	@yield("content");




</div>
</body>
</html>