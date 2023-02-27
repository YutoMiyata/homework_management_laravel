<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/form.css')  }}" >
</head>
<body>
    <h1>新規作成</h1>
    <form action="{{route('homework.store')}}" method="post">
        @csrf
        <div>
            <label for='name'>名前:</label>
            <input id='name' class="name" name="name" type="text" value="{{old('name')}}"/>
        </div>
        <div>
            <label for="japanese">国語:</label>
            <input id='japanese' class="japanese" name="japanese" type="number" value="{{old('japanese')}}"/>
        </div>
         <div>
            <label for="math">数学:</label>
            <input id='math' class="math" name="math" type="number" value="{{old('math')}}"/>
        </div>        
        <div>
            <label for="english">英語:</label>
            <input id='english' class="english" name="english" type="number" value="{{old('english')}}"/>
        </div>        
        <div>
            <label for="science">理科:</label>
            <input id='science' class="science" name="science" type="number" value="{{old('science')}}"/>
        </div>
        <div>
            <label for="society">社会:</label>
            <input id='society' class="society" name="society" type="number" value="{{old('society')}}"/>
        </div>
        <div class="form_button">
            <button>新規作成</button>
        </div>
    </form>
</body>
</html>