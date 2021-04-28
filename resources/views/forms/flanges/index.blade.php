
 @extends('Layouts.lobbyLayouts.flangesLayout')



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
            <td>width_mm</td>
            <td>thickness_mm</td>

            <td>width_inches</td>
            <td>thickness_inches</td>
            <td>preffered_unit</td>
            <td></td>


        </tr>
    </thead>

    <tbody>
    @foreach($flanges as $key => $value)
        <tr>
            <td>{{ $value->flange_id }}</td>
            <td>{{ $value->position  }}</td>
            <td>{{ $value->width_mm }}</td>
            <td>{{ $value->thickness_mm }}</td>

            <td>{{ $value->width_inches }}</td>
            <td>{{ $value->thickness_inches }}</td>
            <td>{{ $value->preffered_unit }}</td>  

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the flange (uses the destroy method DESTROY /flanges/{id} -->





                <!-- we will add this later since its a little more complicated than the other two buttons -->

                {{ Form::open(array('url' => 'flange/' . $value->flange_id, 'class' => 'pull-right' , 'method' => 'POST')) }}
                    @csrf
                    @method('DELETE') 
                    {{ Form::submit('Delete this flange', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}






                <!-- show the flange (uses the show method found at GET /flanges/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('flange/' . $value->flange_id) }}">Show this flange</a>

                <!-- edit this flange (uses the edit method found at GET /flanges/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('flange/' . $value->flange_id . '/edit') }}">Edit this flange</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection



