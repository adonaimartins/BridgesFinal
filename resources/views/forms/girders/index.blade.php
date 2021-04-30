
 @extends('Layouts.lobbyLayouts.girdersLayout')



@section('content')
<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
            deck_id

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>girder_name</td>
            <td>girder_direction</td>
            <td>elevation</td>
            <td></td>
        </tr>
    </thead>

    <tbody>
    @foreach($girders as $key => $value)
        <tr>
            <td>{{ $value->girder_id }}</td>
            <td>{{ $value->girder_name  }}</td>
            <td>{{ $value->girder_direction }}</td>
            <td>{{ $value->elevation }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the girder (uses the destroy method DESTROY /girders/{id} -->

                <!-- we will add this later since its a little more complicated than the other two buttons -->

                {{ Form::open(array('url' => 'girder/' . $value->girder_id, 'class' => 'pull-right' , 'method' => 'POST')) }}
                    @csrf
                    @method('DELETE') 
                    {{ Form::submit('Delete this girder', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}






                <!-- show the girder (uses the show method found at GET /girders/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('girder/' . $value->girder_id) }}">Show this girder</a>

                <!-- edit this girder (uses the edit method found at GET /girders/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('girder/' . $value->girder_id . '/edit') }}">Edit this girder</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection



