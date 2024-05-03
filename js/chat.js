// creating io instance
var socket = io("http://localhost:3000/");

var receiver = "";
let senderId = null;
var sender = $('#auth-user-id').val();
socket.on('sendChatToClient', (message) => {
    $.ajax({
        type: "POST",
        url: baseURL + '/chat/store',
        data: message,
        success: function (data) {
            if (data.status == "200") {
                var html = '<div class="chat-item d-flex align-items-end justify-content-start gap-3" style="margin-left:auto;flex-direction:row-reverse">\n' +
                    '        \n' +
                    '        <img src="' + data.data.userImage + '" alt="Profile-Img" class="img-fluid" width="56" height="56">\n' +
                    '        <div class="chat-item-textgrp d-flex flex-column gap-2 gap-sm-3 user-chat">\n' +
                    '            <p style="background-color:var(--theme-cyan1);margin-left:auto;">' + data.data.message + '</p>\n' +
                    (data.data.attachment ?
                        '                <a href="' + data.data.attachment + '" target="_blank">\n' +
                        '                       <img src="' + data.data.attachment + '" style="height: 100px;width: 100px;">\n' +
                        '                </a>\n' : '') +
                    '            <small>' + data.data.createdAt + '</small>\n' +
                    '        </div>\n' +
                    '    </div>'
                $('.chat-messages').append(html)
                $('.message-input').val('')
                // $('.chat-messages').animate({scrollTop:0}, 500);

                var chatboxMain = $('.chat-messages');
                var contentHeight = chatboxMain[0].scrollHeight;
                $('.chat-messages').animate({scrollTop: chatboxMain.offset().top + contentHeight - 726}, 1000);
                // $( ".chat-messages" ).html(data.data);
                socket.emit('updateSocketId', data.data.sender_id, data.data.receiver_id, html)
            }
        },
        error: function (data) {
            alert("Error")
        }
    });
});
socket.on('fetchMessage', (message) => {
    // console.log('socketId', message)
    fetchChatUsers()
});
// console.log('socket',socket)
socket.on('socketConnectionSecured', (message) => {
    // console.log('socketId', message)
    $('#socket-id').val(message)
});

socket.emit('connectionEstablished, ')
var sender_id = $('.sender_id').val();
var receiver_id = $('.receiver_id').val();
$(function () {
    $('#send-btn').click(function () {
        var message = $('#message-input').val();
        var socketId = $('#socket-id').val();
        receiver_id = $('.receiver_id').val();
        sender_id = $('.sender_id').val();

        var attachment = $('.admin_chat_attachment').prop('files')[0];
        var form_data = new FormData();
        form_data.append("file", attachment);
        if (attachment) {
            $.ajax({
                type: "POST",
                processData: false,
                contentType: false,
                url: baseURL + '/chat/attachment/store',
                data: form_data,
                success: function (data) {
                    if (data.status == "200") {
                        // addCategoryReadURL(this);
                    }
                },
                error: function (data) {
                    alert("Error")
                }
            });
        }
        var fileName = attachment ? attachment.name : null;
        var messageData = {
            'sender_id': senderId,
            'receiver_id': receiverId,
            'receiver_socket': 'PfiZgCle4_nMzNgvAAAF',
            'message': message,
            "fileName": fileName,
            'type': "admin"
        }
        // console.log(messageData)
        socket.emit('sendAdminChatToServer', messageData);
        $(".send-btn").prop('disabled', true);
        $(".image-holder").hide();
        $(".admin_chat_attachment").val('');
        $('.attachImage').remove();
        $('.remove-image').remove();
    })
})

$(document).keypress(function () {
    if (event.which == 13) {
        if ($('#message-input').val() || $('.admin_chat_attachment').prop('files')[0]) {
            $('#send-btn').click();
        }
    }
    ;
});

let page = 1;
let activeDivId = null;

let receiverId = null;
let fetchingOldMessages = false;
let userId = null;

function fetchMessages(senderId, receiverId, userId) {

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            $('.chat-messages').append(this.responseText)

            var chatboxMain = $('.chat-messages');
            var contentHeight = chatboxMain[0].scrollHeight;
            var containerHeight = chatboxMain.innerHeight();

            if (contentHeight > containerHeight && page === 1) {
                $('.chat-messages').animate({scrollTop: chatboxMain.offset().top + contentHeight - 726}, 1000);
            }
        }
    };

    const url = `chat/messages/${senderId}?receiver_id=${receiverId}&user_id=${userId}&page=${page}`; // Base URL
    xhttp.open("GET", url, true);
    xhttp.send();
}

let chatListpage = 1;
$('.chat-messages').on('scroll', function () {
    if ($(this).scrollTop() === 0 && !fetchingOldMessages) {

        // User has scrolled to the top
        // Perform AJAX call here
        fetchingOldMessages = true
        page++
        fetchMessages(senderId, receiverId, userId);
        // chatListpage++
        // fetchChatUsers();
        $('.chat-messages').animate({scrollTop: 0}, 500);

    }
});


$(document).on('click', '.ChatDiv-list', function () {
    $('.chat-messages').html('')

    senderId = $(this).data('id');
    receiverId = $(this).data('receiver-id');
    let chatId = $(this).data('chat-id');
    userId = $(this).data('user');
    let parentDiv = $('#chat_item_' + chatId);
    $('.badge_' + receiverId).text('')  // remove badge count
    let clickedDivId = parentDiv.attr('id');

    // Deactivate previously active div
    if (activeDivId !== null) {
        $('#' + activeDivId).removeClass('active');
    }

    // Activate the clicked div
    parentDiv.addClass('active');
    activeDivId = clickedDivId;

    let status = $(this).data('status');

    let initialSenderName = status == '1' ? $(".profile-text").html('<span class="activicon"></span> ' + chatValidationMsg.online) : $(".profile-text").html('<span class="inactivicon"></span> ' + chatValidationMsg.offline);

    var senderName = $(this).find('.title').text(); // Get the sender's name

    // Remove style if exists
    if ($(this).find('.title').attr('style')) {
        // If it exists, remove it
        $(this).find('.title').removeAttr('style');
    }
    // Remove style if exists


    var image = $(this).find('.userimage').attr('src'); // Get the sender's name
    $('#chatbox-username').text(senderName); // Update displayed username
    $('.chat-profile').attr("src", image); // Update displayed username
    $('.chatbox-footer').show()
    page = 1;
    fetchMessages(senderId, receiverId, userId);
});


$(document).on('keyup', '#search-chat', debounce(function () {
    let search = $(this).val();
    $.ajax({
        url: baseURL + '/chat/search-chat?q=' + search,
        type: 'GET',
        success: function (response) {
            let searchbox = '<div class="mb-2">\n' +
                '    <input type="search" name="q" id="search-chat" class="search-box form-control" value="' + search + '" placeholder="Search...">\n' +
                '    </div>'
            let newData = [searchbox, response]

            $('#ChatDiv').html(newData)
            var strLength = $('.search-box').val().length;
            $('.search-box').focus();
            $('.search-box')[0].setSelectionRange(strLength, strLength);
        },
        error: function (response) {
            var errorMessage = JSON.parse(response.responseText).message
            alert(errorMessage);
        }
    })
}, 500))


let fetchingOldUsers = false;


// User list pagination
$('#ChatDiv').on('scroll', function () {
    if ($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight) {
        chatListpage++
        fetchChatUsers()
    }
});


function fetchChatUsers() {

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            $('#ChatDiv').append(this.responseText)
        }
    };

    const url = `chat/users?&page=${chatListpage}`; // Base URL
    xhttp.open("GET", url, true);
    xhttp.send();
}

fetchChatUsers();

// new css
// on keyup show hide send button
$(document).on('keyup', '.message-input', function () {
    $(".send-btn").removeAttr('disabled');
    if ($(".message-input").val() == '') {
        $(".send-btn").prop('disabled', true);
    }
})

// on change show image.
$(document).on('change', '.admin_chat_attachment', function () {
    $(".image-holder").show();
    var ext = $('.admin_chat_attachment').val().split('.').pop().toLowerCase();
    if ($.inArray(ext, ['png', 'jpg', 'jpeg']) == -1) {
        alert('invalid extension!');
        $(".admin_chat_attachment").val('');
        $(".image-holder").val('');
        $(".send-btn").prop('disabled', true);
        return false;
    }
    // readURL(this);

    if ($(".admin_chat_attachment").val()) {
        $(".send-btn").removeAttr('disabled');
        readURL(this);
    }
})
// click on cross icon remove image.
$(document).on('click', '.remove-image', function () {
    $('.attachImage').closest('img').remove();
    $('.remove-image').closest('i').remove();
    $(".admin_chat_attachment").val('');
    $(".send-btn").prop('disabled', true);
})

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('.image-holder').append('<img class="attachImage" src="' + e.target.result + '" style="height: 100px; width: 100px; border-radius: 20%;"/> <i class="fa-solid fa-xmark remove-image"></i>');
        }
        reader.readAsDataURL(input.files[0]);
    }
}

document.addEventListener('DOMContentLoaded', function () {
    Echo.private('brodcast-message')
        .listen('.getChatMessage', (data) => {
            if (senderId == data.chat.receiver_id && receiverId == data.chat.sender_id) {
                var htmlData = '<div class="chat-item d-flex align-items-end justify-content-start gap-3 user_"  style="margin-left:inherit;flex-direction:row">\n' +
                    '        \n' +
                    '        <img src=' + data.userImage + ' alt="Profile-Img" class="img-fluid" width="56" height="56">\n' +
                    '        <div class="chat-item-textgrp d-flex flex-column gap-2 gap-sm-3 user-chat">\n' +
                    '            <p style="background-color:var(--theme-chat-box);margin-left:inherit;">' + data.chat.message + '</p>\n' +
                    (data.chat.attachment ?
                        '                <a href="' + data.chat.attachment + '" target="_blank">\n' +
                        '                       <img src="' + data.chat.attachment + '" style="height: 100px;width: 100px;">\n' +
                        '                </a>\n' : '') +
                    '            <small>' + data.createdAt + '</small>\n' +
                    '        </div>\n' +
                    '    </div>';
                $('.chat-messages').append(htmlData);

            }
            if (data.unreadCount > 0) {
                $('.ChatDiv-type').remove('')
                chatListpage = 1
                fetchChatUsers();
            }
        })
})

function debounce(func, wait, immediate) {
    var timeout;
    return function () {
        var context = this, args = arguments;
        var later = function () {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        var callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
};
