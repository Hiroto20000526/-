<x-app-layout>
    <x-slot name="header">
        　募集ページ
    </x-slot>
        <h1 class="mx-5 px-5">Blog Name</h1>
        <div class='posts mx-5'>
            @foreach ($posts as $post)
                <div class='post'>
                    
                    <h2 class='title'>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                    
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
            @endforeach
        </div>
        <div>
            <a href='/posts/create'>create</a>
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