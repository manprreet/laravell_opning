@foreach($chats as $chat)
@if($chat->id !== auth()->id())

<div class="ChatDiv-type">
    <div class="ChatDiv-list" data-id="{{ $chat->chats->sender_id }}" data-receiver-id="{{$chat->chats->receiver_id}}" data-chat-id="{{$chat->chats->id}}" data-status="{{$chat->is_online}}" data-user="{{$chat->id}}">
        <input type="hidden" name="sender_id" class="sender_id" value="{{ $chat->chats->sender_id }}" id="sender_id_{{$chat->chats->sender_id}}">
        <input type="hidden" name="receiver_id" class="receiver_id" value="{{ $chat->chats->receiver_id }}" id="receiver_id_{{$chat->chats->sender_id}}">
        <div
            class="ChatDiv-item d-flex align-items-center justify-content-start gap-3" id="chat_item_{{ $chat->chats->id }}">
            <img src="images/user-profile.png" alt="Profile-Img" class="img-fluid"
                 width="56" height="56">
            <div class="text-grp d-flex flex-column sender_name">
                <div class="title">{{ $chat->first_name }}</div>
                <div class="text">{{ $chat->chats->created_at->format('h:i a | d, M Y') }}</div>
            </div>
        </div>
    </div>
</div>
@endif
@endforeach