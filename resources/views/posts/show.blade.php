<x-app-layout>
    <x-slot name="header">
        　詳細ページ
    </x-slot>
    <body>
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <div class="category">
            <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
        </div>
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $post->body }}</p>    
            </div>
        </div>
        <div>
            <h1>
                以下コメント
            </h1>
             @foreach ($post->comments as $comment)
                <h3>
                    {{$comment->user->name}}
                </h3>
                <p class="comment_show">
                     <a href='/comments/{{ $comment->id }}/show'>{{$comment->body}}</a>
                </p>
             @endforeach
        </div>
        <div class="edit">
            <a href="/posts/{{ $post->id }}/edit">edit</a>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</x-app-layout>
