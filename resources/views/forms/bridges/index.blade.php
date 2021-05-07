@extends('Layouts.lobbyLayouts.bridgesLayout')
@section('content')

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>surveyor_name</td>
            <td>surveyor_lastName</td>
            <td>structure_name</td>
            <td>structure_location</td>
            <td>structure_number</td>
            <td>mileageMiles</td>
            <td>mileageYards</td>
            <td></td>
        </tr>
    </thead>
    <tbody>
    @foreach($bridges as $key => $value)
        <tr>
            <td>{{ $value->bridge_id }}</td>
            <td>{{ $value->surveyor_name  }}</td>
            <td>{{ $value->surveyor_lastName }}</td>
            <td>{{ $value->structure_name }}</td>
            <td>{{ $value->structure_location }}</td>
            <td>{{ $value->structure_number }}</td>
            <td>{{ $value->mileageMiles }}</td>
            <td>{{ $value->mileageYards }}</td>
            <!-- we will also add show, edit, and delete buttons -->
            <td>
                <!-- delete the bridge (uses the destroy method DESTROY /bridges/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->
                {{ Form::open(array('url' => 'bridge/' . $value->bridge_id, 'class' => 'pull-right' , 'method' => 'POST')) }}
                    @csrf
                    @method('DELETE') 
                    {{ Form::submit('Delete this bridge', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}

                <!-- show the bridge (uses the show method found at GET /bridges/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('bridge/' . $value->bridge_id) }}">Show this bridge</a>

                <!-- edit this bridge (uses the edit method found at GET /bridges/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('bridge/' . $value->bridge_id . '/edit') }}">Edit this bridge</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
