<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <center>
        <h2>Selamat Datang!</h2>
    </center>
    <h4 class="text-3xl font-bold underline">
        Nama : {{$name}}
    </h4>
    <h4 class="text-3xl font-bold underline">
        Email : {{$email}}
    </h4>
    <h4 class="text-3xl font-bold underline">
        Password : {{$password}}
    </h4>
    <a href="{{url('login')}}">Login</a>
</body>
</html>