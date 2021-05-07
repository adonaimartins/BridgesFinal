
 @extends('Layouts.lobbyLayouts.baysLayout')



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
            <td>bay_position</td>
            <td>length_mm</td>
            <td>thickness_mm</td>
            <td>length_inches</td>
            <td>thickness_inches</td>
            <td>preffered_unit</td>
            <td></td>


        </tr>
    </thead>

    <tbody>
    @foreach($bays as $key => $value)
            <tr>
                <td>{{ $value->bay_id }}</td>
                <td>{{ $value->bay_position  }}</td>
                <td>{{ $value->length_mm }}</td>
                <td>{{ $value->thickness_mm }}</td>
                <td>{{ $value->length_inches }}</td>
                <td>{{ $value->thickness_inches }}</td>
                <td>{{ $value->preffered_unit }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the bay (uses the destroy method DESTROY /bays/{id} -->





                <!-- we will add this later since its a little more complicated than the other two buttons -->

                {{ Form::open(array('url' => 'bay/' . $value->bay_id, 'class' => 'pull-right' , 'method' => 'POST')) }}
                    @csrf
                    @method('DELETE') 
                    {{ Form::submit('Delete this bay', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}






                <!-- show the bay (uses the show method found at GET /bays/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('bay/' . $value->bay_id) }}">Show this bay</a>

                <!-- edit this bay (uses the edit method found at GET /bays/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('bay/' . $value->bay_id . '/edit') }}">Edit this bay</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
















<hr>

<div class="scrollmenu" data-spy="scroll" data-target=".navbar" data-offset="50" style="display: flex; flex-direction: column;" >


    <div style="display: flex; flex-direction: row;" >



        @for ($i = 0; $i < $size=count($bays); $i++)


            @if ($i==0)
                
                <svg class="stiffener" height="100" width="25" >
                    <text fill="#000" font-size="15" font-family="Verdana" x="5" y="50">{{$stiffeners[0][0]->stiffener_number}}</text>
                    <rect x="0" y="0" rx="10" ry="10" width="25" height="100" style="fill:purple; stroke-width:5; opacity:0.4"/>
                </svg>


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


    </div>
</div>


@endsection

