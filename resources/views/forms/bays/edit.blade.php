
 @extends('Layouts.lobbyLayouts.baysLayout')



@section('content')

<h1>Edit {{ $bay->bay_id }}</h1>

<!-- if there are creation errors, they will show here -->

{{ Form::model($bay, array('route' => array('bays.update', $bay->bay_id ), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('surveyor_name', 'surveyor name') }}
        {{ Form::text('surveyor_name', $bay->surveyor_name, array('class' => 'form-control')) }}
    </div>
        <div class="form-group">
        {{ Form::label('surveyor_lastName', 'surveyor lastname') }}
        {{ Form::text('surveyor_lastName', $bay->surveyor_lastName, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('structure_name', 'structure name') }}
        {{ Form::text('structure_name', $bay->structure_name, array('class' => 'form-control')) }}
    </div>
        <div class="form-group">
        {{ Form::label('structure_location', 'structure location') }}
        {{ Form::text('structure_location', $bay->structure_location, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('structure_number', 'structure number') }}
        {{ Form::text('structure_number', $bay->structure_number, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('mileage_type', 'bay mileage') }}
        {{ Form::select('mileage_type', array('0' => 'Select a unit', '1' => 'Miles', '2' => 'Yards'), $bay->mileage_type, array('class' => 'form-control')) }}
        {{ Form::text('mileage', null, array('class' => 'form-control')) }}

    </div>


    {{ Form::submit('Edit the bay!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection


        CREATE TABLE IF NOT EXISTS Bays (
            bay_id INT AUTO_INCREMENT PRIMARY KEY,
            girder_id INT NOT NULL,
            bay_position varchar(255),
            length_mm int,
            thickness_mm int,
            length_inches double(5,2), 
            thickness_inches double(5,2),
            preffered_unit varchar(255)CHECK (preffered_unit='MM' OR preffered_unit='INCHES'),
            FOREIGN KEY (girder_id) REFERENCES Girders(girder_id)
        );