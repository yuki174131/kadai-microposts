    @if (Auth::user()->is_favoriting($micropostId))
        {!! Form::open(['route' => ['favorites.unfavorite', $micropostId], 'method' => 'delete', 'class' => 'form-inline']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-success btn-sm"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['favorites.favorite', $micropostId, 'class' => 'form-inline']]) !!}
            {!! Form::submit('favorite', ['class' => "btn btn-default btn-sm"]) !!}
        {!! Form::close() !!}
    @endif

