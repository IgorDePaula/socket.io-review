var io = require('socket.io')(8080)
io.on('connection', function(socket) {
    io.on('joined',function(data){
        console.log(data)
    })
    console.log('Client connected.');
    socket.emit('news', { hello: 'world' });
    socket.on('my other event', function (data) {
        console.log(data);
    });
    io.emit('this', { will: 'be received by everyone'});

    socket.on('private message', function (from, msg) {
        console.log('I received a private message by ', from, ' saying ', msg);
    });

    socket.on('disconnect', function () {
        io.emit('user disconnected');
    });
});