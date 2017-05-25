<script src="http://localhost:8080/socket.io/socket.io.js"></script>
<script>
    var socketio = io('http://localhost:8080/chat')
    socketio.on('connect', function(data) {
        socketio.emit('join', 'Hello World from client');

    });
    socketio.on('msg',function(data){
        console.log(data)
    })

    socketio.on('connection', function (socket) {

        socket.join('test');
        socket.in('test').emit('rool test','from test room');
        var no = Math.floor(Math.random() * 100);
        //pub.publish('test', 'Generated Chat random no ' + no);
        socket.emit('chat', 'Generated Chat random no ' + no)

        console.log('1 Generated Chat random no ' + no)
    });
</script>