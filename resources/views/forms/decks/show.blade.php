@extends('Layouts.lobbyLayouts.decksLayout')
@section('content')


bridge_id
<h1>Showing {{ $deck->structure_name  }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $deck->structure_name  }}</h2>
        <p>
            <strong>deck_id :</strong> {{ $deck->deck_id  }}<br>
            <strong>mileageYards :</strong> {{ $deck->deck_number  }}
        </p>
    </div>

@endsection



