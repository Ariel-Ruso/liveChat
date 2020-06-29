<div>
    <br/>
    <h3>
        Lista mensajes enviados
    </h3>

    @foreach($mensajes as $mensaje)
        <li>
            <!-- muestro user  + mje -->
            {{ $mensaje['usuario']  }} - {{ $mensaje['mensaje'] }}
        </li>
    @endforeach
    <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('d4f71ed0d4e849a3ad6e', {
      cluster: 'us2'
    });

    var channel = pusher.subscribe('chat-channel');
    channel.bind('chat-event', function(data) {
      alert(JSON.stringify(data));
    });
  </script>

</div>
