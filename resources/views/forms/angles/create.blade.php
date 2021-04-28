
 @extends('Layouts.lobbyLayouts.anglesLayout')



@section('content')
            girder_id

<h1>Create a angle</h1>
    {{ Form::open(array('url' => 'angles')) }}
        <div class="form-group">
            {{ Form::label('position', 'positionposition') }}
            {{ Form::text('position', old('position'), array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('preffered_unit', 'preffered unit') }}
            {{ Form::select('preffered_unit', array('0' => 'Select a unit', '1' => 'MM', '2' => 'INCHES'), old('preffered_unit'), array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('length', 'length') }}
            {{ Form::number('length', old('length'), array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('height', 'height') }}
            {{ Form::number('height', old('height'), array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('width', 'width') }}
            {{ Form::number('width', old('width'), array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('thickness', 'thickness') }}
            {{ Form::number('thickness', old('thickness'), array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('thickness', 'thickness') }}
            {{ Form::number('thickness', old('thickness'), array('class' => 'form-control')) }}
        </div>

        {{ Form::submit('Create the angle!', array('class' => 'btn btn-primary')) }}
    {{ Form::close() }}
@endsection


