Ciao {!! $user->display_name !!}!

{!! $blueprint->reply->user->display_name !!} ha risposto a un tuo messaggio nella discussione "{!! $blueprint->post->discussion->title !!}".

{!! app()->url() !!}/d/{!! $blueprint->reply->discussion_id !!}/{!! $blueprint->reply->number !!}

--- {!! $blueprint->reply->user->display_name !!} ha scritto ---

{!! $blueprint->reply->content !!}
