@extends('Layouts.lobbyLayouts.cpsLayout')
@section('content')


girder_id
<h1>Showing {{ $cp->structure_name  }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $cp->structure_name  }}</h2>
        <p>
            <strong>cp_id :</strong> {{ $cp->cp_id  }}<br>
            <strong>position :</strong> {{ $cp->surveyor_name  }}<br>
            <strong>location :</strong> {{ $cp->surveyor_lastName  }}<br>
            <strong>stiffener_start :</strong> {{ $cp->structure_name }}<br>

            <strong>start_distance_mm :</strong> {{ $cp->structure_location }}<br>
            <strong>start_distance_inches :</strong> {{ $cp->structure_number }}<br>
            <strong>stiffener_end :</strong> {{ $cp->mileageMiles }}<br>
            <strong>end_distance_mm :</strong> {{ $cp->structure_name }}<br>

            <strong>end_distance_inches :</strong> {{ $cp->structure_location }}<br>
            <strong>width_mm :</strong> {{ $cp->structure_number }}<br>
            <strong>thickness_mm :</strong> {{ $cp->structure_location }}<br>
            <strong>width_inches :</strong> {{ $cp->structure_number }}<br>
                     
            <strong>thickness_inches :</strong> {{ $cp->mileageMiles }}<br>
            <strong>preffered_unit :</strong> {{ $cp->mileageYards }}
        </p>
    </div>

@endsection