
 @extends('Layouts.lobbyLayouts.websLayout')



@section('content')
girder_id
<h1>Edit {{ $web->web_id }}</h1>

<!-- if there are creation errors, they will show here -->

{{ Form::model($web, array('route' => array('webs.update', $web->web_id ), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('surveyor_name', 'surveyor name') }}
        {{ Form::text('surveyor_name', $web->surveyor_name, array('class' => 'form-control')) }}
    </div>
        <div class="form-group">
        {{ Form::label('surveyor_lastName', 'surveyor lastname') }}
        {{ Form::text('surveyor_lastName', $web->surveyor_lastName, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('structure_name', 'structure name') }}
        {{ Form::text('structure_name', $web->structure_name, array('class' => 'form-control')) }}
    </div>
        <div class="form-group">
        {{ Form::label('structure_location', 'structure location') }}
        {{ Form::text('structure_location', $web->structure_location, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('structure_number', 'structure number') }}
        {{ Form::text('structure_number', $web->structure_number, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('mileage_type', 'web mileage') }}
        {{ Form::select('mileage_type', array('0' => 'Select a unit', '1' => 'Miles', '2' => 'Yards'), $web->mileage_type, array('class' => 'form-control')) }}
        {{ Form::text('mileage', null, array('class' => 'form-control')) }}

    </div>


    {{ Form::submit('Edit the web!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection


            web_id INT AUTO_INCREMENT PRIMARY KEY,
            length_mm int,
            height_mm int,
            width_mm int,
            thickness_mm int,
            length_inches double(5,2),
            height_inches double(5,2),
            width_inches double(5,2),
            thickness_inches double(5,2),
            preffered_unit varchar(255)CHECK (preffered_unit='MM' OR preffered_unit='INCHES'),
