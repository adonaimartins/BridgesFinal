
 @extends('Layouts.lobbyLayouts.websLayout')



@section('content')
girder_id
<h1>Edit {{ $web->web_id }}</h1>

<!-- if there are creation errors, they will show here -->

{{ Form::model($web, array('route' => array('webs.update', $web->web_id ), 'method' => 'PUT')) }}


        <div class="form-group">
            {{ Form::label('preffered_unit', 'preffered unit') }}
            {{ Form::select('preffered_unit', array('0' => 'Select a unit', '1' => 'MM', '2' => 'INCHES'), null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('length', 'length') }}
            {{ Form::nummber('length', $web->surveyor_name, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('height', 'height') }}
            {{ Form::nummber('height', $web->surveyor_name, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('width', 'width name') }}
            {{ Form::nummber('width', $web->surveyor_name, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('thickness', 'thickness') }}
            {{ Form::nummber('thickness', $web->surveyor_name, array('class' => 'form-control')) }}
        </div>




    {{ Form::submit('Edit the web!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection
