
 @extends('Layouts.lobbyLayouts.anglesLayout')



@section('content')
girder_id
<h1>Edit {{ $angle->angle_id }}</h1>

<!-- if there are creation errors, they will show here -->
    {{ Form::model($angle, array('route' => array('angles.update', $angle->angle_id ), 'method' => 'PUT')) }}
    <div class="form-group">
        {{ Form::label('position', 'positionposition') }}
        {{ Form::text('position', $angle->structure_number, array('class' => 'form-control')) }}
    </div>
        <div class="form-group">
            {{ Form::label('preffered_unit', 'preffered unit') }}
            {{ Form::select('preffered_unit', array('0' => 'Select a unit', '1' => 'MM', '2' => 'INCHES'), old('preffered_unit'), array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('length', 'length') }}
            {{ Form::number('length', $angle->structure_number, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('height', 'height') }}
            {{ Form::number('height', $angle->structure_number, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('width', 'width') }}
            {{ Form::number('width', $angle->structure_number, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('thickness', 'thickness') }}
            {{ Form::number('thickness', $angle->structure_number, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('thickness', 'thickness') }}
            {{ Form::number('thickness', $angle->structure_number, array('class' => 'form-control')) }}
        </div>
        {{ Form::submit('Edit the angle!', array('class' => 'btn btn-primary')) }}
    {{ Form::close() }}
@endsection