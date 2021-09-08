<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    {{-- Таблица юзеров --}}
    <div class="container">
    <table class="table table-dark">
        <thead>
            {{-- Столбцы таблицы --}}
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Created date</th>
          </tr>
        </thead>
        {{-- Перечисление пользователей базы данных --}}
        <tbody>
            @foreach ($users as $user) {{-- цикл вывода всех пользователей --}}
            <tr>
                <td>{{ $loop-> index+1 }}</td>
                <td>{{ $user -> name }}</td>
                <td>{{ $user -> email }}</td>
                <td>{{ $user -> created_at }}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
      {{$users -> links()}} {{-- Пагинация --}}
    </div>
</body>
</html>
