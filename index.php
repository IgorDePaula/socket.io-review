<script src="http://localhost:8080/socket.io/socket.io.js"></script>
<script>
    // var socketio = io('http://localhost:8080')
    var chat = io.connect('http://localhost:8080/chat')
    // , news = io.connect('http://localhost:8080/news');

    chat.on('connect', function () {
        chat.emit('hi!');
    });

    chat.on('connection', (socket) => {
        socket.join('teste')
    socket.in('teste').on('novo',function(data){
        console.log(data)
    })
   /* socket.in('test').on('news', (dados) => {
        console.log(dados)
    alert(dados)
    })*/
    })

    /* news.on('news', function () {
     news.emit('woot');
     });*/
</script>