@extends('Layouts.lobbyLayouts.decksLayout')
@section('content')


bridge_id
<h1>Showing {{ $deck->structure_name  }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $deck->structure_name  }}</h2>
        <p>
            <strong>deck_id :</strong> {{ $deck->deck_id  }}<br>
            <strong>deck number :</strong> {{ $deck->deck_number  }}
        </p>
    </div>

    <a class="btn btn-small btn-info" href="{{ route('girders.index') }}">Girders</a><br>
    <hr>

	<a class="input-links-0" href="{{ route('bridges.index') }}">Bridges</a><br>

	<hr>	
    <img src="../images/decks.jpg" style="width: 50%; height: 50%; margin-top: 10%">
@endsection



