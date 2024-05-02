@foreach($chats as $chat)
@if($chat->id !== auth()->id())
<div class="ChatDiv-type">

    <div class="ChatDiv-list" data-id="{{getAdminUser()->id}}" data-receiver-id="{{ $chat->id }}" data-chat-id="{{$chat->chats->id}}" data-status="{{$chat->is_online}}" data-user="{{$chat->id}}">
        <input type="hidden" name="sender_id" class="sender_id" value="{{getAdminUser()->id}}" id="sender_id_1">
        <input type="hidden" name="receiver_id" class="receiver_id" value="{{ $chat->chats->sender_id }}" id="receiver_id_{{$chat->chats->sender_id}}">
        <div
            class="ChatDiv-item d-flex align-items-center justify-content-start gap-3" id="chat_item_{{ $chat->chats->id }}">
            <img src="{{ $chat->image ? $chat->image : asset('images/user-profile-img.svg') }}" alt="Profile-Img" class="img-fluid userimage"
                 width="56" height="56">
            <div class="text-grp d-flex flex-column sender_name">
                <div class="title" @if($chat->unreadCount && $chat->unreadCount > 0) style="font-weight:bold" @endif>
                    {{ ucfirst($chat->full_name) }}

                </div>
                <div class="text">{{ $chat->chats->created_at->format('h:i a | d, M Y') }}</div>
                @if($chat->is_online == 1)
                    <p>
                        <span class="activicon"></span> <span>Online</span>
                    </p>
                @endif
            </div>
        </div>
    </div>
</div>
@endif
@endforeach
