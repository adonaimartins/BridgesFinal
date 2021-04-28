@extends('Layouts.lobbyLayouts.websLayout')
@section('content')

girder_id
<h1>Showing {{ $web->structure_name  }}</h1>
    <div class="jumbotron text-center">
        <h2>{{ $web->structure_name  }}</h2>
        <p>
            <strong>web_id :</strong> {{ $web->web_id  }}<br>
            <strong>length_mm :</strong> {{ $web->length_mm  }}<br>
            <strong>height_mm :</strong> {{ $web->height_mm  }}<br>
            <strong>width_mm :</strong> {{ $web->width_mm  }}<br>

            <strong>thickness_mm :</strong> {{ $web->thickness_mm  }}<br>
            <strong>length_inches :</strong> {{ $web->length_inches  }}<br>
            <strong>height_inches :</strong> {{ $web->height_inches  }}<br>
            <strong>width_inches :</strong> {{ $web->width_inches  }}<br>

            <strong>thickness_inches :</strong> {{ $web->thickness_inches  }}<br>
            <strong>preffered_unit :</strong> {{ $web->preffered_unit  }}
        </p>
    </div>
@endsection

