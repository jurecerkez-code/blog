<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All Articles</title>
</head>
<body>
    <h1>All Articles</h1>

    @if ($articles->count() === 0)
        <p>No articles yet.</p>
    @else
        <ul>
            @foreach ($articles as $article)
                <li class="article">
                    <h2>{{ $article->title }}</h2>
                    <p class="meta">
                        By {{ $article->author?->name ?? 'Unknown author' }},
                        {{ $article->created_at }}
                    </p>
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>
