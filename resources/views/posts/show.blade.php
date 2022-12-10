<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='post'>
            <div>
                
                <div class="content">
                    <p>作成者　{{ $post->user->name }}</p>
                    <h2 class="title">{{$post ->  title}}</h2>
                    <p class="body">{{$post -> body}}</p>
                   <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                </div>
            </div>    
        </div>
       <div class="edit">
           <a href="/posts/{{ $post->id }}/edit">edit</a>
           </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>