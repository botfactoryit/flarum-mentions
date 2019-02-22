Ciao {!! $user->username !!}!
<br><br>
<i>{!! $blueprint->reply->user->username !!}</i> ha risposto a un tuo messaggio nella discussione
<a href="{!! app()->url() !!}/d/{!! $blueprint->reply->discussion_id !!}/{!! $blueprint->reply->number !!}">
<i>{!! $blueprint->post->discussion->title !!}</i>.
</a>
<br><br>
--- <i>{!! $blueprint->reply->user->username !!}</i> ha scritto ---
<br><br>
{!! $blueprint->reply->contentHtml !!}
