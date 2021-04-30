
 @extends('Layouts.lobbyLayouts.stiffenersLayout')



@section('content')
<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
bay_id
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>stiffener_number</td>
            <td>type</td>
            <td></td>

        </tr>
    </thead>
    <tbody>
    @foreach($stiffeners as $key => $value)
        <tr>
            <td>{{ $value->stiffener_id }}</td>
            <td>{{ $value->stiffener_number  }}</td>
            <td>{{ $value->type }}</td>


            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the stiffener (uses the destroy method DESTROY /stiffeners/{id} -->





                <!-- we will add this later since its a little more complicated than the other two buttons -->

                {{ Form::open(array('url' => 'stiffener/' . $value->stiffener_id, 'class' => 'pull-right' , 'method' => 'POST')) }}
                    @csrf
                    @method('DELETE') 
                    {{ Form::submit('Delete this stiffener', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}






                <!-- show the stiffener (uses the show method found at GET /stiffeners/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('stiffener/' . $value->stiffener_id) }}">Show this stiffener</a>

                <!-- edit this stiffener (uses the edit method found at GET /stiffeners/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('stiffener/' . $value->stiffener_id . '/edit') }}">Edit this stiffener</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection



