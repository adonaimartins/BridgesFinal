
 @extends('Layouts.lobbyLayouts.stiffenersLayout')



@section('content')
bay_id
<h1>Edit {{ $stiffener->stiffener_id }}</h1>

<!-- if there are creation errors, they will show here -->

{{ Form::model($stiffener, array('route' => array('stiffeners.update', $stiffener->stiffener_id ), 'method' => 'PUT')) }}


        <div class="form-group">
            {{ Form::label('stiffener_number', 'stiffener_number name') }}
            {{ Form::number('stiffener_number', $stiffener->stiffener_number, array('class' => 'form-control')) }}
        </div>
            <div class="form-group">
            {{ Form::label('type', 'stiffener type') }}
            {{ Form::number('type', $stiffener->type, array('class' => 'form-control')) }}
        </div>

    {{ Form::submit('Edit the stiffener!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection


