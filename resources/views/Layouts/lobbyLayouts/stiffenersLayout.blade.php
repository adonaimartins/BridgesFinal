<!DOCTYPE html>
<html>
<head>
    <title>stiffener App</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
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


	@yield("content");




</div>
</body>
</html>