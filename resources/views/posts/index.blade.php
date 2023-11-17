<x-app-layout>
    <x-slot name="header">
        　募集ページ
    </x-slot>
        <h1 class="border-b p-2" style="text-align: center;" >投稿一覧</h1>
        <div class='posts border-b'>
           <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <a href="/posts/create">投稿する</a>
                    </div>
                </div>
            </div>
        </div>
            @foreach ($posts as $post)
            <div style='border:solid 1px; margin-bottom: 10px;'>
                <div class='post'>
                    <h2 class='title'>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                    {{ $post->user->name }}
                    {{ $post->user->region->name }}
                    
                    <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                    
                    <p class='body'>{{ $post->body }}</p>
                    
                    <div class='comment'>
                        
                        @if ($post->comments->count())
                            <div class="comments_show">
                                <a href="/posts/{{ $post->id }}">コメントをみる</a>
                            </div>
                        @else
                            <span>コメントはまだありません。</span>
                        @endif
                            <div class="comment_create">
                                <a href='/comments/{{ $post->id }}/create'>コメントする </a>
                            </div>
                        
                    </div>
                    
                    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $post->id }})">delete</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
        
        
        
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        
        <div class="user_name">
            ログインユーザー：{{ Auth::user()->name }}
        </div>
        <script>
            function deletePost(id){
                'use strict'
                
                if (confirm('削除すると復元できません。\n本当に削除しますか？')){
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
</x-app-layout>