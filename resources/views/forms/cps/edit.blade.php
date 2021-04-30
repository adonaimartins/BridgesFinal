
 @extends('Layouts.lobbyLayouts.cpsLayout')



@section('content')

<h1>Edit {{ $cp->cp_id }}</h1>
girder_id
<!-- if there are creation errors, they will show here -->

{{ Form::model($cp, array('route' => array('cps.update', $cp->cp_id ), 'method' => 'PUT')) }}




        <div class="form-group">
            {{ Form::label('position', 'position') }}
            {{ Form::select('position', array('0' => 'Select a position', '1' => 'top', '2' => 'bottom'), null, array('class' => 'form-control')) }}
        </div>



        <div class="form-group">
            {{ Form::label('location', 'location') }}
            {{ Form::number('location', $cp->location, array('class' => 'form-control')) }}
        </div>
            <div class="form-group">
            {{ Form::label('stiffener_start', 'stiffener_start') }}
            {{ Form::number('stiffener_start', $cp->stiffener_start, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('stiffener_end', 'stiffener_end') }}
            {{ Form::number('stiffener_end', $cp->stiffener_end, array('class' => 'form-control')) }}
        </div>


        <div class="form-group">
            {{ Form::label('preffered_unit', 'preffered unit') }}
            {{ Form::select('preffered_unit', array('0' => 'Select a unit', '1' => 'MM', '2' => 'INCHES'), null, array('class' => 'form-control')) }}
        </div>



        <div class="form-group">
            {{ Form::label('start_distance', 'start_distance') }}
            {{ Form::number('start_distance', $cp->start_distance, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('end_distance', 'end_distance') }}
            {{ Form::number('end_distance', $cp->end_distance, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('width', 'width') }}
            {{ Form::number('width', $cp->width, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('thickness', 'thickness') }}
            {{ Form::number('thickness', $cp->thickness, array('class' => 'form-control')) }}
        </div>



















    {{ Form::submit('Edit the cp!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection


