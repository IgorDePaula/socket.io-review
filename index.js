var io = require('socket.io')(8080)
var chat = io
    .of('/chat')
    .on('connection', function (socket) {
        socket.join('teste')
        chat.to('teste').emit('novo','nodo')
       /* socket.emit('a message', {
            that: 'only'
            , '/chat': 'will get'
        });
        socket.join('test').in('test').emit('news','I\'m here')
        chat.emit('a message', {
            everyone: 'in'
            , '/chat': 'will get'
        });*/
    })

/*
var news = io
    .of('/news')
    .on('connection', function (socket) {
        socket.emit('item', { news: 'item' });
    });*/
