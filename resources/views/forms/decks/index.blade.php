
 @extends('Layouts.lobbyLayouts.decksLayout')



@section('content')
<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

bridge_id
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>deck_id</td>
            <td>deck_number</td>

            <td></td>
        </tr>
    </thead>
    <tbody>
    @foreach($decks as $key => $value)
        <tr>
            <td>{{ $value->deck_id }}</td>
            <td>{{ $value->deck_number  }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the deck (uses the destroy method DESTROY /decks/{id} -->

                <!-- we will add this later since its a little more complicated than the other two buttons -->
                {{ Form::open(array('url' => 'deck/' . $value->deck_id, 'class' => 'pull-right' , 'method' => 'POST')) }}
                    @csrf
                    @method('DELETE') 
                    {{ Form::submit('Delete this deck', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}

                <!-- show the deck (uses the show method found at GET /decks/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('deck/' . $value->deck_id) }}">Show this deck</a>

                <!-- edit this deck (uses the edit method found at GET /decks/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('deck/' . $value->deck_id . '/edit') }}">Edit this deck</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection



