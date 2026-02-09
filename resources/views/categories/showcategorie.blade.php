<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odin - Categories</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body class="bg-[#f8fafc] text-[#1e293b]">

    <div class="flex min-h-screen">
        @include('layout.sidebar')

        <main class="flex-1 p-12">
            <header class="flex justify-between items-start mb-10">
                <div>
                    <h2 class="text-3xl font-extrabold text-[#1e293b] mb-1">Categories</h2>
                    <p class="text-gray-400 font-medium">Organize your links into logical groups.</p>
                </div>
                <a href="{{ route('categories.create') }}"
                    class="bg-[#0ea5e9] hover:bg-[#0284c7] text-white px-6 py-3 rounded-xl font-bold flex items-center gap-2 shadow-lg shadow-blue-100 transition-all active:scale-95">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 4v16m8-8H4"></path>
                    </svg>
                    New Category
                </a>
            </header>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($categories as $category)
                    <div
                        class="bg-white p-6 rounded-[1.5rem] border border-gray-50 shadow-sm hover:shadow-md transition-all flex items-center gap-5 group cursor-pointer">
                        <div
                            class="w-14 h-14 bg-slate-50 text-slate-500 rounded-2xl flex items-center justify-center shrink-0 transition-transform group-hover:text-[#0ea5e9]">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z">
                                </path>
                            </svg>
                        </div>

                        <div>
                            <h3 class="text-xl font-bold text-slate-800">{{ $category->name }}</h3>
                            <p class="text-gray-400 text-sm font-medium">
                                {{ $category->links->count() ?? '0' }} items
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </main>
    </div>

</body>

</html>
