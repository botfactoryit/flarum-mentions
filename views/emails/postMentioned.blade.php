Ciao {!! $user->display_name !!}!

{!! $blueprint->reply->user->display_name !!} ha risposto a un tuo messaggio nella discussione "{!! $blueprint->post->discussion->title !!}".

{!! $url->to('forum')->route('discussion', ['id' => $blueprint->post->discussion_id, 'near' => $blueprint->post->number]) !!}

--- {!! $blueprint->reply->user->display_name !!} ha scritto ---

{!! $blueprint->reply->content !!}
