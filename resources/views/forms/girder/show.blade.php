@extends('Layouts.lobbyLayouts.girdersLayout')
@section('content')


deck_id
<h1>Showing {{ $girder->structure_name  }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $girder->structure_name  }}</h2>
        <p>
            <strong>girder_id :</strong> {{ $girder->girder_id  }}<br>
            <strong>girder_name :</strong> {{ $girder->surveyor_name  }}<br>
            <strong>girder_direction :</strong> {{ $girder->surveyor_lastName  }}<br>
            <strong>elevation :</strong> {{ $girder->mileageYards  }}
        </p>
    </div>
@endsection