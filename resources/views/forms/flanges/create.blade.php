
 @extends('Layouts.lobbyLayouts.flangesLayout')



@section('content')
girder_id
<h1>Create a flange</h1>
    {{ Form::open(array('url' => 'flanges')) }}



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
            {{ Form::label('mileage_type', 'flange mileage') }}
            {{ Form::select('mileage_type', array('0' => 'Select a unit', '1' => 'Miles', '2' => 'Yards'), old('flange_level'), array('class' => 'form-control')) }}
            {{ Form::text('mileage', old('mileage'), array('class' => 'form-control')) }}

        </div>

        {{ Form::submit('Create the flange!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}


@endsection







</div>
</body>
</html>


            flange_id INT AUTO_INCREMENT PRIMARY KEY,
            position varchar(255) CHECK (position='TOP' OR position='BOTTOM'), 
            width_mm int,
            thickness_mm int,
            width_inches double(5,2),
            thickness_inches double(5,2),
            preffered_unit varchar(255)CHECK (preffered_unit='MM' OR preffered_unit='INCHES'),   
