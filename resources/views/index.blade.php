<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <nav>
        <header>
            <h1>Programming in <span class="php">PHP</span></h1>
        </header>
        <div class="search-bar">
            <input type="text" name="search" id="search" placeholder="Search">
        </div>
    </nav>
    <section class="container grid">
        @foreach($contents as $content)
            <div class="content">
                <h2> <a href="/content/{{$content['title']}}">{{$content['title']}}</a> </h2>
                
            </div>
        @endforeach
    </section>
</body>
</html>