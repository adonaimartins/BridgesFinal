@extends('Layouts.lobbyLayouts.flangesLayout')
@section('content')


girder_id
<h1>Showing {{ $flange->structure_name  }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $flange->structure_name  }}</h2>
        <p>
            <strong>flange_id :</strong> {{ $flange->flange_id  }}<br>
            <strong>position :</strong> {{ $flange->surveyor_name  }}<br>
            <strong>width_mm :</strong> {{ $flange->surveyor_lastName  }}<br>
            <strong>thickness_mm :</strong> {{ $flange->structure_name  }}<br>

            <strong>width_inches :</strong> {{ $flange->structure_location  }}<br>
            <strong>thickness_inches :</strong> {{ $flange->structure_number  }}<br>
            <strong>preffered_unit :</strong> {{ $flange->mileageYards  }}
        </p>
    </div>
@endsection