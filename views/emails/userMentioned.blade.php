Ciao {!! $user->display_name !!}!

{!! $blueprint->post->user->display_name !!} ti ha menzionato nella discussione "{!! $blueprint->post->discussion->title !!}".

{!! app()->url() !!}/d/{!! $blueprint->post->discussion_id !!}/{!! $blueprint->post->number !!}

--- {!! $blueprint->post->user->display_name !!} ha scritto ---

{!! $blueprint->post->content !!}
