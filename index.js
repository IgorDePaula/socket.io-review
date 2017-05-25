var io = require('socket.io')(8080)

io.on('connection', function(socket) {
    console.log('Client connected.');
    socket.on('join',function(data){
        console.log(data,'join')
        socket.emit('msg','Hello from server')
    });
    socket.join('test')
    socket.on('disconnect', function() {
        console.log('Client disconnected.');
    });
});