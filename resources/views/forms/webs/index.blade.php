
 @extends('Layouts.lobbyLayouts.websLayout')



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
    @foreach($webs as $key => $value)
        <tr>
            <td>{{ $value->web_id }}</td>
            <td>{{ $value->length_mm  }}</td>
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

                <!-- delete the web (uses the destroy method DESTROY /webs/{id} -->





                <!-- we will add this later since its a little more complicated than the other two buttons -->

                {{ Form::open(array('url' => 'web/' . $value->web_id, 'class' => 'pull-right' , 'method' => 'POST')) }}
                    @csrf
                    @method('DELETE') 
                    {{ Form::submit('Delete this web', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}






                <!-- show the web (uses the show method found at GET /webs/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('web/' . $value->web_id) }}">Show this web</a>

                <!-- edit this web (uses the edit method found at GET /webs/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('web/' . $value->web_id . '/edit') }}">Edit this web</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection


