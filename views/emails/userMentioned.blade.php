Ciao {!! $user->display_name !!}!

{!! $blueprint->post->user->display_name !!} ti ha menzionato nella discussione "{!! $blueprint->post->discussion->title !!}".

{!! $url->to('forum')->route('discussion', ['id' => $blueprint->post->discussion_id, 'near' => $blueprint->post->number]) !!}

--- {!! $blueprint->post->user->display_name !!} ha scritto ---

{!! $blueprint->post->content !!}
