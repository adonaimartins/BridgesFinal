<!DOCTYPE html>
<html>
<head>
    <title>bridge App</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('bridges') }}">bridge Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('bridges') }}">View All bridges</a></li>
        <li><a dusk="create-button" href="{{ URL::to(route('bridges.create')) }}">Create a bridge</a>
    </ul>
</nav>



<!-- if there are creation errors, they will show here -->


	@yield("content")



</div>
</body>
</html>