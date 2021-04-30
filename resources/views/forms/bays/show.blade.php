@extends('Layouts.lobbyLayouts.baysLayout')
@section('content')


girder_id
<h1>Showing {{ $bay->structure_name  }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $bay->structure_name  }}</h2>
        <p>
            <strong>bay_id :</strong> {{ $bay->bay_id  }}<br>
            <strong>bay_position :</strong> {{ $bay->bay_position  }}<br>
            <strong>length_mm :</strong> {{ $bay->length_mm  }}<br>
            <strong>thickness_mm :</strong> {{ $bay->thickness_mm  }}<br>
            <strong>length_inches :</strong> {{ $bay->length_inches  }}<br>
            <strong>thickness_inches :</strong> {{ $bay->thickness_inches  }}<br>
            <strong>preffered_unit :</strong> {{ $bay->preffered_unit  }}<br>
        </p>
    </div>
    <a class="btn btn-small btn-info" href="{{ route('stiffeners.index') }}">stiffeners</a>
    <hr>
@endsection
