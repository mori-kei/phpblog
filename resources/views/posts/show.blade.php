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
        <div class="comments">
            <h1>コメント欄</h1>
            @foreach($post->comment as $comment)
                <p>{{$comment->body}}</p>
            @endforeach
        </div>
         <form action="/posts/comments" method="POST">
            @csrf
             <input
                    name="post_id"
                    type="hidden"
                    value="{{ $post->id }}"
                >
            <div class="comment">
                <h2>コメント</h2>
               <textarea name="comment[body]" placeholder="コメントを入力してください"></textarea>
               
            </div>
            <input type="submit" value="送信"/>
        </form>
        
       <div class="edit">
           <a href="/posts/{{ $post->id }}/edit">edit</a>
           </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>