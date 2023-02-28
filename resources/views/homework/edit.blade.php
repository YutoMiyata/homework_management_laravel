<x-layout.base>
    <main>
        <h1>編集</h1>
        <form action="{{route('homework.update',['id'=> $homework->id])}}" method="post">
            @csrf
            <div>
                <label for='name'>名前:</label>
                <input id='name' class="name" name="name" type="text" value="{{$homework->name}}"/>
            </div>
            <div>
                <label for="japanese">国語:</label>
                <input id='japanese' class="japanese" name="japanese" type="number" value="{{$homework->japanese}}"/>
            </div>
            <div>
                <label for="math">数学:</label>
                <input id='math' class="math" name="math" type="number" value="{{$homework->math}}"/>
            </div>        
            <div>
                <label for="english">英語:</label>
                <input id='english' class="english" name="english" type="number" value="{{$homework->english}}"/>
            </div>        
            <div>
                <label for="science">理科:</label>
                <input id='science' class="science" name="science" type="number" value="{{$homework->science}}"/>
            </div>
            <div>
                <label for="society">社会:</label>
                <input id='society' class="society" name="society" type="number" value="{{$homework->society}}"/>
            </div>
            <div class="form_button">
                <button>更新</button>
            </div>
        </form>
    </main>

</x-layout.base>
