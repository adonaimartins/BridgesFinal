
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
    @foreach($stiffenersList as $key => $value)
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


        @for ($i = 0; $i < $size=count($bays); $i++)


            @if ($i==0)
                @if (count($stiffeners[0])>0)
                    <svg class="stiffener" height="100" width="25" >
                        <text fill="#000" font-size="15" font-family="Verdana" x="5" y="50">{{$stiffeners[0][0]->stiffener_number}}</text>
                        <rect x="0" y="0" rx="10" ry="10" width="25" height="100" style="fill:purple; stroke-width:5; opacity:0.4"/>
                    </svg>
                @endif

                <svg class="bay" height="100" width="100" >
                    <rect x="0" y="0" rx="10" ry="10" width="100" height="100" style="fill:white; stroke:black; stroke-width:2; opacity:0.3" />
                    <text fill="#000" font-size="15" font-family="Verdana" x="35" y="45">bay</text>
                    <text fill="#000" font-size="15" font-family="Verdana" x="35" y="65">{{$bays[0]->bay_position}}</text>
                </svg>

                @for($x=1 ; $x<count($stiffeners[$i]); $x++)
                    <svg class="stiffener" height="100" width="25" >
                        <text fill="#000" font-size="15" font-family="Verdana" x="5" y="50">{{$stiffeners[0][$x]->stiffener_number}}</text>
                        <rect x="0" y="0" rx="10" ry="10" width="25" height="100" style="fill:purple; stroke-width:5; opacity:0.4"/>
                    </svg>
                @endfor


            @elseif($i>=1)

                
                <svg class="bay" height="100" width="100" >
                    <rect x="0" y="0" rx="10" ry="10" width="100" height="100" style="fill:white; stroke:black; stroke-width:2; opacity:0.3" />
                    <text fill="#000" font-size="15" font-family="Verdana" x="35" y="45">bay</text>
                    <text fill="#000" font-size="15" font-family="Verdana" x="35" y="65">{{$bays[$i]->bay_position}}</text>
                </svg>


                @for($x=0 ; $x<count($stiffeners[$i]); $x++)
                    <svg class="stiffener" height="100" width="25" >
                        <text fill="#000" font-size="15" font-family="Verdana" x="5" y="50">{{$stiffeners[$i][$x]->stiffener_number}}</text>
                        <rect x="0" y="0" rx="10" ry="10" width="25" height="100" style="fill:purple; stroke-width:5; opacity:0.4"/>
                    </svg>
                @endfor
            @endif





        @endfor


<hr>
@endsection



