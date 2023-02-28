<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/nav.css')  }}" >
</head>
<body>
    <nav>
        <h3>宿題管理システム</h3>
        <div>
            <a href="{{ route('homework.create')}}">新規作成</a>
        </div>
    </nav>
    {{ $slot }}
</body>
</html>