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
        <h3><a href="{{ route('homework.index')}}" class="nav_list nav_title">宿題管理システム</a></h3>
        <ul>
            <li>
                <a href="{{ route('homework.index')}}" class="nav_list">一覧</a>
                <a href="{{ route('homework.create')}}" class="nav_list">新規作成</a>
            </li>
        </ul>  
    </nav>
    {{ $slot }}
</body>
</html>