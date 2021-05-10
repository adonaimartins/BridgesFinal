
 @extends('Layouts.lobbyLayouts.girdersLayout')



@section('content')

<h1>Edit {{ $girder->girder_id }}</h1>

<!-- if there are creation errors, they will show here -->

{{ Form::model($girder, array('route' => array('girders.update', $girder->girder_id ), 'method' => 'PUT')) }}

        <div class="form-group">
            {{ Form::label('girder_name', 'girder_name') }}
            {{ Form::text('girder_name', $girder->girder_name, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('girder_direction', 'girder_direction') }}
            {{ Form::select('position', array('0' => 'Select a position', '1' => 'left', '2' => 'right'), null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('elevation', 'elevation') }}
            {{ Form::select('elevation', array('0' => 'Select a elevation', '1' => 'INTERNALFACE', '2' => 'EXTERNALFACE'), null, array('class' => 'form-control')) }}
        </div>

    {{ Form::submit('Edit the girder!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

<img src="../../images/girder.png" style="width: 50%; height: 50%; margin-top: 10%">

@endsection
