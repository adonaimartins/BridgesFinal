
 @extends('Layouts.lobbyLayouts.cpsLayout')



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
            <td>location</td>
            <td>stiffener_start</td>
            <td>start_distance_mm</td>
            <td>start_distance_inches</td>
            <td>stiffener_end</td>
            <td>end_distance_mm</td>
            <td>end_distance_inches</td>
            <td>width_mm</td>
            <td>thickness_mm</td>
            <td>width_inches</td>
            <td>thickness_inches</td>
            <td>preffered_unit</td>
            <td></td>
        </tr>
    </thead>

    <tbody>
    @foreach($cps as $key => $value)
        <tr>
            <td>{{ $value->cp_id }}</td>
            <td>{{ $value->position  }}</td>
            <td>{{ $value->location }}</td>
            <td>{{ $value->stiffener_start }}</td>
            <td>{{ $value->start_distance_mm }}</td>
            <td>{{ $value->start_distance_inches }}</td>
            <td>{{ $value->stiffener_end }}</td>
            <td>{{ $value->end_distance_mm }}</td>
            <td>{{ $value->end_distance_inches }}</td>
            <td>{{ $value->width_mm  }}</td>
            <td>{{ $value->thickness_mm }}</td>
            <td>{{ $value->width_inches }}</td>
            <td>{{ $value->thickness_inches }}</td>
            <td>{{ $value->preffered_unit }}</td>





            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the cp (uses the destroy method DESTROY /cps/{id} -->





                <!-- we will add this later since its a little more complicated than the other two buttons -->

                {{ Form::open(array('url' => 'cp/' . $value->cp_id, 'class' => 'pull-right' , 'method' => 'POST')) }}
                    @csrf
                    @method('DELETE') 
                    {{ Form::submit('Delete this cp', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}






                <!-- show the cp (uses the show method found at GET /cps/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('cp/' . $value->cp_id) }}">Show this cp</a>

                <!-- edit this cp (uses the edit method found at GET /cps/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('cp/' . $value->cp_id . '/edit') }}">Edit this cp</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection


