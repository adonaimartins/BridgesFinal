
 @extends('Layouts.lobbyLayouts.cpsLayout')



@section('content')

<h1>Create a cp</h1>
    {{ Form::open(array('url' => 'cps')) }}



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
            {{ Form::label('mileage_type', 'cp mileage') }}
            {{ Form::select('mileage_type', array('0' => 'Select a unit', '1' => 'Miles', '2' => 'Yards'), old('cp_level'), array('class' => 'form-control')) }}
            {{ Form::text('mileage', old('mileage'), array('class' => 'form-control')) }}

        </div>

        {{ Form::submit('Create the cp!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}


@endsection







</div>
</body>
</html>



        CREATE TABLE IF NOT EXISTS CPs (
            cp_id INT AUTO_INCREMENT PRIMARY KEY,
            girder_id INT NOT NULL,
            position varchar(255) CHECK (position='TOP' OR position='BOTTOM'),
            location int,         
            stiffener_start INT,
            start_distance_mm INT,
            start_distance_inches double(5,2),
            stiffener_end INT,
            end_distance_mm INT,
            end_distance_inches double(5,2),
            width_mm INT,
            thickness_mm INT,
            width_inches double(5,2),
            thickness_inches double(5,2),
            preffered_unit varchar(255)CHECK (preffered_unit='MM' OR preffered_unit='INCHES'),
            FOREIGN KEY (girder_id) REFERENCES Girders(girder_id)
        );