<x-site-layout :title="$article->title">

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
    
    <p>
        <a href="{{ route('articles.index') }}" class="text-blue-600 hover:underline">
            Back to articles overview
        </a>
    </p>

</x-site-layout>
