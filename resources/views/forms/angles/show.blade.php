@extends('Layouts.lobbyLayouts.anglesLayout')
@section('content')


girder_id
<h1>Showing {{ $angle->structure_name  }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $angle->structure_name  }}</h2>
        <p>
            <strong>angle_id :</strong> {{ $angle->angle_id  }}<br>
            <strong>position :</strong> {{ $angle->position  }}<br>
            <strong>length_mm :</strong> {{ $angle->length_mm  }}<br>
            <strong>height_mm :</strong> {{ $angle->height_mm  }}<br>
            <strong>width_mm :</strong> {{ $angle->width_mm  }}<br>
            <strong>thickness_mm :</strong> {{ $angle->thickness_mm  }}<br>
            <strong>length_inches :</strong> {{ $angle->length_inches  }}<br>
            <strong>height_inches :</strong> {{ $angle->height_inches  }}<br>
            <strong>width_inches :</strong> {{ $angle->width_inches  }}<br>
            <strong>thickness_inches :</strong> {{ $angle->thickness_inches  }}<br>
            <strong>preffered_unit :</strong> {{ $angle->preffered_unit  }}
        </p>
    </div>
@endsection
