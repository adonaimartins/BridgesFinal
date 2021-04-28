
 @extends('Layouts.lobbyLayouts.stiffenersLayout')



@section('content')
bay_id
<h1>Edit {{ $stiffener->stiffener_id }}</h1>

<!-- if there are creation errors, they will show here -->

{{ Form::model($stiffener, array('route' => array('stiffeners.update', $stiffener->stiffener_id ), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('surveyor_name', 'surveyor name') }}
        {{ Form::text('surveyor_name', $stiffener->surveyor_name, array('class' => 'form-control')) }}
    </div>
        <div class="form-group">
        {{ Form::label('surveyor_lastName', 'surveyor lastname') }}
        {{ Form::text('surveyor_lastName', $stiffener->surveyor_lastName, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('structure_name', 'structure name') }}
        {{ Form::text('structure_name', $stiffener->structure_name, array('class' => 'form-control')) }}
    </div>
        <div class="form-group">
        {{ Form::label('structure_location', 'structure location') }}
        {{ Form::text('structure_location', $stiffener->structure_location, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('structure_number', 'structure number') }}
        {{ Form::text('structure_number', $stiffener->structure_number, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('mileage_type', 'stiffener mileage') }}
        {{ Form::select('mileage_type', array('0' => 'Select a unit', '1' => 'Miles', '2' => 'Yards'), $stiffener->mileage_type, array('class' => 'form-control')) }}
        {{ Form::text('mileage', null, array('class' => 'form-control')) }}

    </div>


    {{ Form::submit('Edit the stiffener!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection


                    stiffener_id INT AUTO_INCREMENT PRIMARY KEY,
                    stiffener_number int,
                    type int,
