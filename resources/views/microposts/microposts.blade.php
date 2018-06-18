<ul class="media-list">
@foreach ($microposts as $micropost)
    <?php $user = $micropost->user; ?>
    <li class="media">
        <div class="media-left">
            <img class="media-object img-rounded" src="{{ Gravatar::src($user->email, 50) }}" alt="">
        </div>
        <div class="media-body">
            <div>
                {!! link_to_route('users.show', $user->name, ['id' => $user->id]) !!} <span class="text-muted">posted at {{ $micropost->created_at }}</span>
            </div>
            <div>
                <p>{!! nl2br(e($micropost->content)) !!}</p>
            </div>
            <div>
                 <label class="button-inline">
                  @include('user_follow.favorite_button', ['micropost' => $micropost])
                     <div class= $count_favorites = $users->favorites()->count($favorite_id);>
                     </div> 
                 </label>
    
                <label class="button-inline">
                @if (Auth::user()->id == $micropost->user_id)
                    {!! Form::open(['route' => ['microposts.destroy', $micropost->id], 'method' => 'delete']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs radio-inline']) !!}
                    {!! Form::close() !!}
                @endif
                </label>
            </div>
        </div>
    </li>
@endforeach
</ul>
{!! $microposts->render() !!}