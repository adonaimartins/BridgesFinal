
 @extends('Layouts.lobbyLayouts.anglesLayout')



@section('content')
<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif



girder_id

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>position</td>
            <td>length_mm</td>
            <td>height_mm</td>
            <td>width_mm</td>
            <td>thickness_mm</td>
            <td>length_inches</td>
            <td>height_inches</td>
            <td>width_inches</td>
            <td>thickness_inches</td>
            <td>preffered_unit</td>
            <td></td>
        </tr>
    </thead>

    <tbody>
    @foreach($angles as $key => $value)
        <tr>
            <td>{{ $value->angle_id }}</td>
            <td>{{ $value->position  }}</td>
            <td>{{ $value->length_mm }}</td>
            <td>{{ $value->height_mm }}</td>
            <td>{{ $value->width_mm }}</td>
            <td>{{ $value->thickness_mm }}</td>
            <td>{{ $value->length_inches }}</td>
            <td>{{ $value->height_inches }}</td>
            <td>{{ $value->width_inches }}</td>
            <td>{{ $value->thickness_inches }}</td>
            <td>{{ $value->preffered_unit }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the angle (uses the destroy method DESTROY /angles/{id} -->





                <!-- we will add this later since its a little more complicated than the other two buttons -->

                {{ Form::open(array('url' => 'angle/' . $value->angle_id, 'class' => 'pull-right' , 'method' => 'POST')) }}
                    @csrf
                    @method('DELETE') 
                    {{ Form::submit('Delete this angle', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}






                <!-- show the angle (uses the show method found at GET /angles/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('angle/' . $value->angle_id) }}">Show this angle</a>

                <!-- edit this angle (uses the edit method found at GET /angles/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('angle/' . $value->angle_id . '/edit') }}">Edit this angle</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection


