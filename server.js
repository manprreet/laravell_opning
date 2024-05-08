var express = require("express");
var app = express();
var mysql = require('mysql');

var connection = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "GgiJ-9j$ceDn6oF",
    database: "go-meal"
});
connection.connect(function (err) {
    if (err) throw err;
    console.log("SQl Connected!");
});


// creating http instance
var http = require("http").createServer(app);

// creating socket io instance
const io = require('socket.io')(http, {
    cors: {origin: "*"}
});

// start the server
http.listen(3000, function () {
    console.log("Server started");
});

io.on("connection", function (socket) {
    console.log("User connected", socket.id);
    socket.on('updateSocketId', (userId) => {
        // console.log("in", userId, "soketId", socket.id)
        connection.query("UPDATE users SET `socket_id` = " + "'" + socket.id + "'" + ", `is_online` = '1' WHERE `id` = " + userId)
    });

    socket.on('sendAdminChatToServer', (messageData) => {
        // console.log("messageData", messageData);
        var adminMessage = {
            sender_id: messageData.sender_id,
            receiver_id: messageData.receiver_id,
            message: messageData.message,
            socketId: socket.id,
            fileName: messageData.fileName,
        }
        if (messageData.type == "user") {
            io.sockets.emit('sendChatToUser', adminMessage);
        }
        if (messageData.type == "admin") {
            io.sockets.emit('sendChatToClient', adminMessage);
        }
        socket.on('getMessage', (userMessageData) => {
            if (messageData.type == "user") {
                // console.log("messageData",userMessageData)
                io.sockets.emit('getMessageUser', userMessageData);
            }
            if (messageData.type == "admin") {
                // console.log("messageData",userMessageData)
                io.sockets.emit('getMessageAdmin', userMessageData);
            }

        })
        // io.to(messageData.receiver_id).emit('sendChatToClient', adminMessage);
    });
    // Listen for disconnection
    socket.on("disconnect", () => {
        connection.query("UPDATE users SET `is_online` = '0' WHERE `socket_id` =" + "'" + socket.id + "'")
    });
});
