
 @extends('Layouts.lobbyLayouts.decksLayout')

            deck_number int NOT NULL,

@section('content')
bridge_id
<h1>Create a deck</h1>
    {{ Form::open(array('url' => 'decks')) }}

        <div class="form-group">
            {{ Form::label('deck_number', 'deck_number') }}
            {{ Form::number('deck_number', old('deck_number'), array('class' => 'form-control')) }}
        </div>
        
        {{ Form::submit('Create the deck!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}


@endsection







</div>
</body>
</html>


