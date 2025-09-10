<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $article->title }}</title>
</head>
<body>
    <div>
        <h2>
            <a href="/articles/{{ $article->id }}">
                {{ $article->title }}
            </a>
        </h2>
        

        <p class="meta">
            By {{ $article->author?->name ?? 'Unknown author' }},
            {{ $article->created_at }}
        </p>
        <div class="content">
            {{ $article->content }}
        </div>
    </div>
    
    <p><a href="/articles">Back to articles overview </a></p>
</body>
</html>
