
 @extends('Layouts.lobbyLayouts.bridgesLayout')



@section('content')

<h1>Create a bridge</h1>
    {{ Form::open(array('url' => 'bridges')) }}
        <div class="form-group">
            {{ Form::label('surveyor_name', 'surveyor name') }}
            {{ Form::text('surveyor_name', old('surveyor_name'), array('class' => 'form-control')) }}
        </div>
            <div class="form-group">
            {{ Form::label('surveyor_lastName', 'surveyor lastname') }}
            {{ Form::text('surveyor_lastName', old('surveyor_lastName'), array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('structure_name', 'structure name') }}
            {{ Form::text('structure_name', old('structure_name'), array('class' => 'form-control')) }}
        </div>
            <div class="form-group">
            {{ Form::label('structure_location', 'structure location') }}
            {{ Form::text('structure_location', old('structure_location'), array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('structure_number', 'structure number') }}
            {{ Form::text('structure_number', old('structure_number'), array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('mileage_type', 'bridge mileage') }}
            {{ Form::select('mileage_type', array('0' => 'Select a unit', '1' => 'Miles', '2' => 'Yards'), old('bridge_level'), array('class' => 'form-control')) }}
            {{ Form::text('mileage', old('mileage'), array('class' => 'form-control')) }}
        </div>
        {{ Form::submit('Create the bridge!', array('class' => 'btn btn-primary')) }}
    {{ Form::close() }}


                <img src="/images/bridge.jpg" style="width: 50%; margin-top: 10%">

@endsection