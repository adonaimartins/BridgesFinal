@extends('Layouts.lobbyLayouts.cpsLayout')
@section('content')


girder_id
<h1>Showing {{ $cp->structure_name  }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $cp->structure_name  }}</h2>
        <p>
            <strong>cp_id :</strong> {{ $cp->cp_id  }}<br>
            <strong>position :</strong> {{ $cp->position  }}<br>
            <strong>location :</strong> {{ $cp->location  }}<br>
            <strong>stiffener_start :</strong> {{ $cp->stiffener_start }}<br>

            <strong>start_distance_mm :</strong> {{ $cp->start_distance_mm }}<br>
            <strong>start_distance_inches :</strong> {{ $cp->start_distance_inches }}<br>
            <strong>stiffener_end :</strong> {{ $cp->stiffener_end }}<br>
            <strong>end_distance_mm :</strong> {{ $cp->end_distance_mm }}<br>

            <strong>end_distance_inches :</strong> {{ $cp->end_distance_inches }}<br>
            <strong>width_mm :</strong> {{ $cp->width_mm }}<br>
            <strong>thickness_mm :</strong> {{ $cp->thickness_mm }}<br>
            <strong>width_inches :</strong> {{ $cp->width_inches }}<br>
                     
            <strong>thickness_inches :</strong> {{ $cp->thickness_inches }}<br>
            <strong>preffered_unit :</strong> {{ $cp->preffered_unit }}
        </p>
    </div>

@endsection

