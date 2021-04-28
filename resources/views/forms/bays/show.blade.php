@extends('Layouts.lobbyLayouts.baysLayout')
@section('content')


girder_id
<h1>Showing {{ $bay->structure_name  }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $bay->structure_name  }}</h2>
        <p>
            <strong>bay_id :</strong> {{ $bay->bay_id  }}<br>
            <strong>bay_position :</strong> {{ $bay->surveyor_name  }}<br>
            <strong>length_mm :</strong> {{ $bay->surveyor_lastName  }}<br>
            <strong>thickness_mm :</strong> {{ $bay->structure_name  }}<br>
            <strong>length_inches :</strong> {{ $bay->structure_location  }}<br>
            <strong>thickness_inches :</strong> {{ $bay->structure_number  }}<br>
            <strong>preffered_unit :</strong> {{ $bay->mileageMiles  }}<br>
        </p>
    </div>

@endsection
