Ciao {!! $user->username !!}!

{!! $blueprint->reply->user->username !!} ha risposto a un tuo messaggio nella discussione "{!! $blueprint->post->discussion->title !!}".

{!! app()->url() !!}/d/{!! $blueprint->reply->discussion_id !!}/{!! $blueprint->reply->number !!}

--- {!! $blueprint->reply->user->username !!} ha scritto ---

{!! $blueprint->reply->content !!}
