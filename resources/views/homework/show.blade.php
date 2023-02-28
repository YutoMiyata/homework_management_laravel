<x-layout.base>
    <main>
        <h1>詳細画面</h1>
        <table>
            <tr>
                <th>ID</th>
                <td>{{ $homework->id }}</td>
            </tr>
            <tr>
                <th>名前</th>
                <td>{{ $homework->name }}</td>
            </tr>
            <tr>
                <th>国語</th>
                <td>{{ $homework->japanese }}</td>
            </tr>
            <tr>
                <th>数学</th>
                <td>{{ $homework->math }}</td>
            </tr>
            <tr>
                <th>英語</th>
                <td>{{ $homework->english }}</td>
            </tr>
            <tr>
                <th>理科</th>
                <td>{{ $homework->science }}</td>
            </tr>
            <tr>
                <th>社会</th>
                <td>{{ $homework->society }}</td>
            </tr>
        </table>
        <div class="show_buttons">
            <div>
                <a href="{{route('homework.index')}}">一覧</a>
            </div>
        
            <div class="show_edit_button">
                <a href="{{route('homework.edit',['id'=> $homework->id])}}">編集</a>
            </div>
            <div>
                <form action="{{route('homework.destroy',['id'=> $homework->id])}}" method="post">
                @csrf
                <button>削除</button>
                </form>
            </div>
        </div>
    </main>

    </x-layout.base>
