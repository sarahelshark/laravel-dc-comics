<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Posts List</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="antialiased">
        
        <h1>Hello Admin! Check the following posts</h1>

        <div>
         @foreach ($posts as $post)
         <h2> 
            {{$post->title}}
         </h2>
         <a href="{{route('posts.show',$post)}}">go to "{{$post->title}}"</a>
         @endforeach
         
        </div>
    </body>
</html>
