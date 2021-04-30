@extends('Layouts.lobbyLayouts.bridgesLayout')
@section('content')



    <h1>Showing {{ $bridge->structure_name  }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $bridge->structure_name  }}</h2>
        <p>
            <strong>bridge_id :</strong> {{ $bridge->bridge_id  }}<br>
            <strong>surveyor_name :</strong> {{ $bridge->surveyor_name  }}<br>
            <strong>surveyor_lastName :</strong> {{ $bridge->surveyor_lastName  }}<br>
            <strong>structure_name :</strong> {{ $bridge->structure_name  }}<br>
            <strong>structure_location :</strong> {{ $bridge->structure_location  }}<br>
            <strong>structure_number :</strong> {{ $bridge->structure_number  }}<br>
            <strong>mileageMiles :</strong> {{ $bridge->mileageMiles  }}<br>
            <strong>mileageYards :</strong> {{ $bridge->mileageYards  }}
        </p>
    </div>
    <a class="btn btn-small btn-info" href="{{ route('decks.index') }}">Decks</a><br>
    <hr>
@endsection