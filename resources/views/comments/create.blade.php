<x-app-layout>
    <x-slot name="header">
        　コメント作成ページ
    </x-slot>
    
    <body>
        <h1>コメントを残す</h1>
        <form action="/comments" method="POST">
            @csrf
            <div class="body">
                <h2>Body</h2>
                <textarea name="body" placeholder="コメントを残す。">{{ old('comment.body') }}</textarea>
                 <p class="body_error" style="color:red">{{ $errors->first('comment.body') }}</p>
            </div>
            <input type="hidden" value="{{$post->id}}" name="post_id">
            <input type="submit" value="保存する"/>
        </form>
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</x-app-layout>