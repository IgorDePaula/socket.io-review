<script src="http://localhost:8080/socket.io/socket.io.js"></script>
<script>
    var socketio = io('http://localhost:8080')
    socketio.on('news', function (data) {
        console.log(data);
        socketio.emit('my other event', { my: 'data' });
    });
</script>