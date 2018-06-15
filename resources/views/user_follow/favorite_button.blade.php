@if (Auth::user()->is_favorite($micropost->id))
       {!! Form::open(['route' => ['user.unfavorite', $micropost->id], 'method' => 'delete']) !!}
       {!! Form::submit('unfavorite', ['class' => "btn btn-danger btn-xs radio-inline"]) !!}
       {!! Form::close() !!}
@else
       {!! Form::open(['route' => ['user.favorite', $micropost->id]]) !!}
       {!! Form::submit('favorite', ['class' => "btn btn-primary btn-xs radio-inline"]) !!}
       {!! Form::close() !!}
@endif
