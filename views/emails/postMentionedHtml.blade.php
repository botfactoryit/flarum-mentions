Ciao {!! $user->username !!}!
<br><br>
<i>{!! $blueprint->reply->user->username !!}</i> ha risposto a un tuo messaggio nella discussione
<a href="{!! $url->to('forum')->route('discussion', ['id' => $blueprint->post->discussion_id, 'near' => $blueprint->post->number]) !!}">
<i>{!! $blueprint->post->discussion->title !!}</i></a>.
<br><br>
--- <i>{!! $blueprint->reply->user->username !!}</i> ha scritto ---
<br>
{!! $blueprint->reply->formatContent() !!}
