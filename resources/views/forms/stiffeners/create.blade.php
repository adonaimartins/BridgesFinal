
 @extends('Layouts.lobbyLayouts.stiffenersLayout')



@section('content')
bay_id


<h1>Create a stiffener</h1>
    {{ Form::open(array('url' => 'stiffeners')) }}

        <div class="form-group">
            {{ Form::label('stiffener_number', 'stiffener number') }}
            {{ Form::number('stiffener_number', old('stiffener_number'), array('class' => 'form-control')) }}
        </div>
            <div class="form-group">
            {{ Form::label('type', 'stiffener type') }}
            {{ Form::number('type', old('type'), array('class' => 'form-control')) }}
        </div>

        {{ Form::submit('Create the stiffener!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

@endsection

</div>
</body>
</html>
