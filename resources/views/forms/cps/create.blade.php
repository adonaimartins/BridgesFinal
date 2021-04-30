
 @extends('Layouts.lobbyLayouts.cpsLayout')



@section('content')
girder_id
<h1>Create a cp</h1>
    {{ Form::open(array('url' => 'cps')) }}


        <div class="form-group">
            {{ Form::label('position', 'position') }}
            {{ Form::select('position', array('0' => 'Select a position', '1' => 'top', '2' => 'bottom'), old('position'), array('class' => 'form-control')) }}
        </div>



        <div class="form-group">
            {{ Form::label('location', 'location') }}
            {{ Form::number('location', old('location'), array('class' => 'form-control')) }}
        </div>
            <div class="form-group">
            {{ Form::label('stiffener_start', 'stiffener_start') }}
            {{ Form::number('stiffener_start', old('stiffener_start'), array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('stiffener_end', 'stiffener_end') }}
            {{ Form::number('stiffener_end', old('stiffener_endstiffener_end'), array('class' => 'form-control')) }}
        </div>


        <div class="form-group">
            {{ Form::label('preffered_unit', 'preffered unit') }}
            {{ Form::select('preffered_unit', array('0' => 'Select a unit', '1' => 'MM', '2' => 'INCHES'), old('preffered_unit'), array('class' => 'form-control')) }}
        </div>



        <div class="form-group">
            {{ Form::label('start_distance', 'start_distance') }}
            {{ Form::number('start_distance', old('start_distance'), array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('end_distance', 'end_distance') }}
            {{ Form::number('end_distance', old('end_distance'), array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('width', 'width') }}
            {{ Form::number('width', old('width'), array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('thickness', 'thickness') }}
            {{ Form::number('thickness', old('thickness'), array('class' => 'form-control')) }}
        </div>



        {{ Form::submit('Create the cp!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}


@endsection







</div>
</body>
</html>




