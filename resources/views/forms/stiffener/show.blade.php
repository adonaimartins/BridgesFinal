@extends('Layouts.lobbyLayouts.stiffenersLayout')
@section('content')

bay_id

<h1>Showing {{ $stiffener->structure_name  }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $stiffener->structure_name  }}</h2>
        <p>
            <strong>stiffener_id :</strong> {{ $stiffener->stiffener_id  }}<br>
            <strong>stiffener_number :</strong> {{ $stiffener->surveyor_name  }}<br>
            <strong>type :</strong> {{ $stiffener->mileageYards  }}
        </p>
    </div>

@endsection
