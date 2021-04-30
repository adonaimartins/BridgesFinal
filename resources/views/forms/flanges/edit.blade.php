
 @extends('Layouts.lobbyLayouts.flangesLayout')



@section('content')
girder_id
<h1>Edit {{ $flange->flange_id }}</h1>

<!-- if there are creation errors, they will show here -->

{{ Form::model($flange, array('route' => array('flanges.update', $flange->flange_id ), 'method' => 'PUT')) }}


        <div class="form-group">
            {{ Form::label('position', 'position') }}
            {{ Form::select('position', array('0' => 'Select a position', '1' => 'top', '2' => 'bottom'), null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('preffered_unit', 'preffered unit') }}
            {{ Form::select('preffered_unit', array('0' => 'Select a unit', '1' => 'MM', '2' => 'INCHES'), null, array('class' => 'form-control')) }}
        </div>


        <div class="form-group">
            {{ Form::label('width', 'width') }}
            {{ Form::number('width', $flange->width, array('class' => 'form-control')) }}
        </div>
            <div class="form-group">
            {{ Form::label('thickness', 'thickness') }}
            {{ Form::number('thickness', $flange->thickness, array('class' => 'form-control')) }}
        </div>




    {{ Form::submit('Edit the flange!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection
