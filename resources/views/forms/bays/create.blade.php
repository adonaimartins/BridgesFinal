@extends('Layouts.lobbyLayouts.baysLayout')
@section('content')

girder_id
<h1>Create a bay</h1>
    {{ Form::open(array('url' => 'bays')) }}

        <div class="form-group">
            {{ Form::label('bay_position', 'bay position') }}
            {{ Form::select('bay_position', array('0' => 'Select a position', '1' => 'top-left', '2' => 'top-right', '3' => 'bottom-right', '4' => 'bottom-left'), old('bay_position'), array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('preffered_unit', 'preffered unit') }}
            {{ Form::select('preffered_unit', array('0' => 'Select a unit', '1' => 'MM', '2' => 'INCHES'), old('preffered_unit'), array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('length', 'length') }}
            {{ Form::text('length', old('length'), array('class' => 'form-control')) }}
        </div>


        <div class="form-group">
            {{ Form::label('thickness', 'thickness') }}
            {{ Form::text('thickness', old('thickness'), array('class' => 'form-control')) }}
        </div>

        {{ Form::submit('Create the bay!', array('class' => 'btn btn-primary')) }}
    {{ Form::close() }}
@endsection






</div>
</body>
</html>


