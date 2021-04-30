
 @extends('Layouts.lobbyLayouts.girdersLayout')



@section('content')
deck_id
<h1>Create a girder</h1>
    {{ Form::open(array('url' => 'girders')) }}

        <div class="form-group">
            {{ Form::label('girder_name', 'girder_name') }}
            {{ Form::text('girder_name', old('girder_name'), array('class' => 'form-control')) }}
        </div>


        <div class="form-group">
            {{ Form::label('girder_direction', 'girder_direction') }}
            {{ Form::select('girder_direction', array('0' => 'Select a direction', '1' => 'left', '2' => 'right'), old('position'), array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('elevation', 'elevation') }}
            {{ Form::select('elevation', array('0' => 'Select a elevation', '1' => 'INTERNALFACE', '2' => 'EXTERNALFACE'), old('position'), array('class' => 'form-control')) }}
        </div>

        {{ Form::submit('Create the girder!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}


@endsection



</div>
</body>
</html>






