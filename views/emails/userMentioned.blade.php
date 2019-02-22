Ciao {!! $user->username !!}!

{!! $blueprint->post->user->username !!} ti ha menzionato nella discussione "{!! $blueprint->post->discussion->title !!}".

{!! app()->url() !!}/d/{!! $blueprint->post->discussion_id !!}/{!! $blueprint->post->number !!}

--- {!! $blueprint->post->user->username !!} ha scritto ---

{!! $blueprint->post->content !!}
