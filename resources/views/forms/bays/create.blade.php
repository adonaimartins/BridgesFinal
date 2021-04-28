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
            {{ Form::label('length_mm', 'length mm') }}
            {{ Form::text('length_mm', old('length_mm'), array('class' => 'form-control')) }}
        </div>


        <div class="form-group">
            {{ Form::label('thickness_mm', 'thickness mm') }}
            {{ Form::text('thickness_mm', old('thickness_mm'), array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('length_inches', 'length inches') }}
            {{ Form::text('length_inches', old('length_inches'), array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('structure_number', 'structure number') }}
            {{ Form::text('structure_number', old('structure_number'), array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('mileage_type', 'bay mileage') }}
            {{ Form::select('mileage_type', array('0' => 'Select a unit', '1' => 'Miles', '2' => 'Yards'), old('bay_level'), array('class' => 'form-control')) }}
            {{ Form::text('mileage', old('mileage'), array('class' => 'form-control')) }}
        </div>
        {{ Form::submit('Create the bay!', array('class' => 'btn btn-primary')) }}
    {{ Form::close() }}
@endsection

            bay_position varchar(255),
            length_mm int,
            thickness_mm int
            preffered_unit varchar(255)CHECK (preffered_unit='MM' OR preffered_unit='INCHES'),





</div>
</body>
</html>


