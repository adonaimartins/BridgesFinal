
 @extends('Layouts.lobbyLayouts.decksLayout')



@section('content')

bridge_id
<h1>Edit {{ $deck->deck_id }}</h1>

<!-- if there are creation errors, they will show here -->

{{ Form::model($deck, array('route' => array('decks.update', $deck->deck_id ), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('deck_number', 'deck number') }}
        {{ Form::text('deck_number', $deck->deck_number, array('class' => 'form-control')) }}
    </div>
    {{ Form::submit('Edit the deck!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection

