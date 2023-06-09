<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            font-size: large;
        }
    </style>
</head>
<body>
    <header class="">
        <h1>{{ $data['name'] }} a envoyé un message</h1>
        <h3><b>Email : </b>< {{ $data['email'] }} ></h3>
    </header>
    <div class="box">
        <h3><b>Subject : </b> {{ $data['sujet'] }}</h3>
        <p>{{ $data['message'] }}</p>
    </div>
</body>
</html>