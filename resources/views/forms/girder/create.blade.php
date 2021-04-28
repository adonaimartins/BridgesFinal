
 @extends('Layouts.lobbyLayouts.girdersLayout')



@section('content')
deck_id
<h1>Create a girder</h1>
    {{ Form::open(array('url' => 'girders')) }}



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
            {{ Form::label('mileage_type', 'girder mileage') }}
            {{ Form::select('mileage_type', array('0' => 'Select a unit', '1' => 'Miles', '2' => 'Yards'), old('girder_level'), array('class' => 'form-control')) }}
            {{ Form::text('mileage', old('mileage'), array('class' => 'form-control')) }}

        </div>

        {{ Form::submit('Create the girder!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}


@endsection







</div>
</body>
</html>


            girder_id INT AUTO_INCREMENT PRIMARY KEY,
            girder_name varchar(255) NOT NULL,
            girder_direction varchar(255),
            elevation varchar(255), 
            FOREIGN KEY (deck_id) REFERENCES Decks(deck_id),
            CONSTRAINT CHK_Elevation CHECK (elevation='INTERNALFACE' OR elevation='EXTERNALFACE')
