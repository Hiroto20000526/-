<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
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
                <p>
                     {{$comment->body}}
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
</html>