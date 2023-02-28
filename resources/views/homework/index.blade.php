<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css')  }}" >
</head>
<body>
    <h1>一覧画面</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>名前</th>
            <th>詳細</th>
        </tr>

        @foreach($homeworks as $homework)
            <tr>
                <td class="index_id">{{$homework->id}}</td>
                <td class="index_name">{{$homework->name}}</td>
                <td class="index_detail_button"><a href='{{route("homework.show",['id' => $homework->id])}}'>詳細</a></td>
            </tr>
        @endforeach
    </table>

    {{-- <footer>
        <div>
            <a href="{{route('homework.create')}}">新規</a>
        </div>
    </footer> --}}
</body>
</html>