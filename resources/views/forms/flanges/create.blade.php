
 @extends('Layouts.lobbyLayouts.flangesLayout')



@section('content')
girder_id
<h1>Create a flange</h1>
    {{ Form::open(array('url' => 'flanges')) }}


        <div class="form-group">
            {{ Form::label('position', 'position') }}
            {{ Form::select('position', array('0' => 'Select a position', '1' => 'top', '2' => 'bottom'), old('position'), array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('preffered_unit', 'preffered unit') }}
            {{ Form::select('preffered_unit', array('0' => 'Select a unit', '1' => 'MM', '2' => 'INCHES'), old('preffered_unit'), array('class' => 'form-control')) }}
        </div>




        <div class="form-group">
            {{ Form::label('width', 'width') }}
            {{ Form::number('width', old('width'), array('class' => 'form-control')) }}
        </div>
            <div class="form-group">
            {{ Form::label('thickness', 'thickness') }}
            {{ Form::number('thickness', old('thickness'), array('class' => 'form-control')) }}
        </div>


        {{ Form::submit('Create the flange!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}


@endsection







</div>
</body>
</html>


