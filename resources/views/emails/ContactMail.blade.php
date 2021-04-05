<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Сообщение от клиента</h1>
  <p>Имя клиента: {{$details['first_name']}}</p>
  <p>Email клиента: {{$details['email']}}</p>
  <p>Сообщение: {{$details['msg']}}</p>
  <p>Быстро ответить: {{ $details['asap'] == 'on' ? 'Да, нужен быстрый ответ' : 'No, take your time!' }}</p>
</body>
</html>


