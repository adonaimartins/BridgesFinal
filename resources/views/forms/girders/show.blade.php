@extends('Layouts.lobbyLayouts.girdersLayout')
@section('content')


deck_id
<h1>Showing {{ $girder->structure_name  }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $girder->structure_name  }}</h2>
        <p>
            <strong>girder_id :</strong> {{ $girder->girder_id  }}<br>
            <strong>girder_name :</strong> {{ $girder->girder_name  }}<br>
            <strong>girder_direction :</strong> {{ $girder->girder_direction  }}<br>
            <strong>elevation :</strong> {{ $girder->elevation  }}
        </p>
    </div>
    <div style="display: flex; flex-direction: row;">
	    <a class="btn btn-small btn-info" href="{{ route('bays.index') }}">Bays</a>
	    <a class="btn btn-small btn-info" href="{{ route('webs.index') }}">Webs</a>
	    <a class="btn btn-small btn-info" href="{{ route('angles.index') }}">Angles</a>
	    <a class="btn btn-small btn-info" href="{{ route('cps.index') }}">CPs</a>
	    <a class="btn btn-small btn-info" href="{{ route('flanges.index') }}">Flanges</a>
    </div>
    <hr>
@endsection

