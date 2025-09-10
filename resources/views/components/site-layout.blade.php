<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'My Blog' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900">

    <!-- Header -->
    <header class="bg-white border-b shadow">
        <div class="mx-auto max-w-3xl p-4 flex justify-between">
            <span class="font-bold">My Blog</span>
            <nav>
                <a href="{{ route('articles.index') }}" class="text-blue-600 hover:underline">Articles</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="mx-auto max-w-3xl p-6">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="mx-auto max-w-3xl p-4 text-sm text-gray-500 border-t">
        © {{ date('Y') }} My Blog. All rights reserved.
    </footer>

</body>
</html>
