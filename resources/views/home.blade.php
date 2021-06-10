@extends('layouts/main')

@section('content')
    <div class="travels">
        @foreach ($travels as $travel )
            <div class="travel">
                <h3>{{$travel->title}}</h3>
                <div>{{$travel->days}} giorni</div>
                <div>{{$travel->description}}</div>
                <div><strong>{{$travel->price}}</strong></div>
                @if ($travel->isConfirmed == true)
                    <div>PARTENZA CONFERMATA!</div>
                @else <div> Partenza in attesa di conferma</div>
                @endif
                @if (!$loop->last)
                  <hr>  
                @endif
            </div>
        @endforeach
    </div>
    <div class="nav">
        {{$travels->links()}}
    </div>
@endsection