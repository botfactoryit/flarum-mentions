Ciao {!! $user->username !!}!
<br><br>
<i>{!! $blueprint->post->user->username !!}</i> ti ha menzionato nella discussione
<a href="{!! app()->url() !!}/d/{!! $blueprint->post->discussion_id !!}/{!! $blueprint->post->number !!}">
<i>{!! $blueprint->post->discussion->title !!}</i>.
</a>
<br><br>
--- <i>{!! $blueprint->post->user->username !!}</i> ha scritto ---
<br><br>
{!! $blueprint->post->contentHtml !!}
