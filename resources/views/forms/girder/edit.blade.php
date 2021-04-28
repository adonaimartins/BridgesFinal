
 @extends('Layouts.lobbyLayouts.girdersLayout')



@section('content')
deck_id
<h1>Edit {{ $girder->girder_id }}</h1>

<!-- if there are creation errors, they will show here -->

{{ Form::model($girder, array('route' => array('girders.update', $girder->girder_id ), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('surveyor_name', 'surveyor name') }}
        {{ Form::text('surveyor_name', $girder->surveyor_name, array('class' => 'form-control')) }}
    </div>
        <div class="form-group">
        {{ Form::label('surveyor_lastName', 'surveyor lastname') }}
        {{ Form::text('surveyor_lastName', $girder->surveyor_lastName, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('structure_name', 'structure name') }}
        {{ Form::text('structure_name', $girder->structure_name, array('class' => 'form-control')) }}
    </div>
        <div class="form-group">
        {{ Form::label('structure_location', 'structure location') }}
        {{ Form::text('structure_location', $girder->structure_location, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('structure_number', 'structure number') }}
        {{ Form::text('structure_number', $girder->structure_number, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('mileage_type', 'girder mileage') }}
        {{ Form::select('mileage_type', array('0' => 'Select a unit', '1' => 'Miles', '2' => 'Yards'), $girder->mileage_type, array('class' => 'form-control')) }}
        {{ Form::text('mileage', null, array('class' => 'form-control')) }}

    </div>


    {{ Form::submit('Edit the girder!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection



            girder_id INT AUTO_INCREMENT PRIMARY KEY,
            girder_name varchar(255) NOT NULL,
            girder_direction varchar(255),
            elevation varchar(255), 
            FOREIGN KEY (deck_id) REFERENCES Decks(deck_id),
            CONSTRAINT CHK_Elevation CHECK (elevation='INTERNALFACE' OR elevation='EXTERNALFACE')
