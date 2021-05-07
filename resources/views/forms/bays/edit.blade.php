
 @extends('Layouts.lobbyLayouts.baysLayout')



@section('content')
girder_id
<h1>Edit {{ $bay->bay_id }}</h1>

<!-- if there are creation errors, they will show here -->

{{ Form::model($bay, array('route' => array('bays.update', $bay->bay_id ), 'method' => 'PUT')) }}




        <div class="form-group">
            {{ Form::label('bay_position', 'bay_position') }}
            {{ Form::number('bay_position', $bay->bay_position, array('class' => 'form-control')) }}
        </div>

    <div class="form-group">
        {{ Form::label('preffered_unit', 'preffered unit') }}
        {{ Form::select('preffered_unit', array('0' => 'Select a unit', '1' => 'MM', '2' => 'INCHES'), null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('length', 'length') }}
        {{ Form::number('length', $bay->length, array('class' => 'form-control')) }}
    </div>
        <div class="form-group">
        {{ Form::label('thickness', 'thickness') }}
        {{ Form::number('thickness', $bay->thickness, array('class' => 'form-control')) }}
    </div>


    {{ Form::submit('Edit the bay!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection

