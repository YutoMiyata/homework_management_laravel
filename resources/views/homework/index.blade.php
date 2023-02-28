 <x-layout.base>
    <main>
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
    </main>

    </x-layout.base>
