<x-site-layout>

    <h1>All Articles</h1>

    @if ($articles->count() === 0)
        <p>No articles yet.</p>
    @else
        <ul>
            @foreach ($articles as $article)
                <li class="article">
                    <h2>
                        <a href="{{ route('articles.show', $article->id) }}">
                            {{ $article->title }}
                        </a>
                    </h2>
                    <p class="meta">
                        By {{ $article->author?->name ?? 'Unknown author' }},
                        {{ $article->created_at->format('F j, Y') }}
                    </p>
                    
                </li>
            @endforeach
        </ul>
    @endif

</x-site-layout>
