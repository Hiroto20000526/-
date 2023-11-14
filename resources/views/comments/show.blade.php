<x-app-layout>
    <x-slot name="header">
        　コメント詳細ページ
    </x-slot>
    <body>
        <div class="comment_content">
            <h3>コメント本文</h3>
            <p>{{ $comment->body }}</p>    
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</x-app-layout>