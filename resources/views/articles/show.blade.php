<x-site-layout>

    <div>
        <h1>{{ $article->title }}</h1>
        <p class="meta">
            By {{ $article->author?->name ?? 'Unknown author' }},
            {{ $article->created_at }}
        </p>
        <div class="content">
            {{ $article->content }}
        </div>
    </div>
    
    <p><a href="{{ route('articles.index') }}">Back to articles overview</a></p>

</x-site-layout>
