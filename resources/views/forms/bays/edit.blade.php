
 @extends('Layouts.lobbyLayouts.baysLayout')



@section('content')
girder_id
<h1>Edit {{ $bay->bay_id }}</h1>

<!-- if there are creation errors, they will show here -->

{{ Form::model($bay, array('route' => array('bays.update', $bay->bay_id ), 'method' => 'PUT')) }}




    <div class="form-group">
        {{ Form::label('bay_position', 'bay position') }}
        {{ Form::select('bay_position', array('0' => 'Select a position', '1' => 'top-left', '2' => 'top-right', '3' => 'bottom-right', '4' => 'bottom-left'), null, array('class' => 'form-control')) }}
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

