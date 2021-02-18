Ciao {!! $user->username !!}!
<br><br>
<i>{!! $blueprint->post->user->username !!}</i> ti ha menzionato nella discussione
<a href="{!! $url->to('forum')->route('discussion', ['id' => $blueprint->post->discussion_id, 'near' => $blueprint->post->number]) !!}">
<i>{!! $blueprint->post->discussion->title !!}</i></a>.
<br><br>
--- <i>{!! $blueprint->post->user->username !!}</i> ha scritto ---
<br>
{!! $blueprint->post->formatContent() !!}
