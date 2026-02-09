<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odin - My Links</title>
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

    <div class="flex">
        @include('layout.sidebar')

        <main class="flex-1 p-12">
            <header class="flex justify-between items-start mb-10">
                <div>
                    <h2 class="text-3xl font-extrabold text-[#1e293b] mb-1">My Links</h2>
                    <p class="text-gray-400 font-medium">Manage and organize your digital library.</p>
                </div>
                <a href="{{ route('links.create') }}"
                    class="bg-[#0ea5e9] hover:bg-[#0284c7] text-white px-6 py-3 rounded-xl font-bold flex items-center gap-2 shadow-lg shadow-blue-100 transition-all active:scale-95">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Add New Link
                </a>
            </header>

            <div class="flex gap-4 mb-10">
                <div class="relative flex-1">
                    <span class="absolute inset-y-0 left-4 flex items-center text-gray-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </span>
                    <input type="text" placeholder="Search links..."
                        class="w-full pl-12 pr-4 py-3.5 bg-white border border-gray-100 rounded-2xl focus:outline-none focus:ring-2 focus:ring-blue-50 focus:border-blue-300 shadow-sm transition">
                </div>
                <div class="relative">
                    <select
                        class="appearance-none pl-12 pr-10 py-3.5 bg-white border border-gray-100 rounded-2xl focus:outline-none focus:ring-2 focus:ring-blue-50 focus:border-blue-300 shadow-sm transition font-medium text-gray-600 cursor-pointer">
                        <option>All Categories</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach

                    </select>
                    <span class="absolute inset-y-0 left-4 flex items-center text-gray-400 pointer-events-none">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z">
                            </path>
                        </svg>
                    </span>
                    <span class="absolute inset-y-0 right-4 flex items-center text-gray-400 pointer-events-none">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </span>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($links as $link)
                    <div
                        class="bg-white p-8 rounded-2xl border border-gray-50 shadow-sm hover:shadow-md transition-all group relative">

                        <div
                            class="absolute top-6 right-6 flex gap-2 opacity-0 group-hover:opacity-100 transition-all transform translate-y-[-5px] group-hover:translate-y-0">
                            <a href="{{ route('links.edit', $link->id) }}"
                                class="p-2 bg-blue-50 text-blue-500 rounded-lg hover:bg-blue-100 transition-colors shadow-sm">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                    </path>
                                </svg>
                            </a>

                            <form action="{{ route('links.destroy', $link->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="p-2 bg-red-50 text-red-500 rounded-lg hover:bg-red-100 transition-colors shadow-sm">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.15c-.178 2.338-2.514 3.895-4.867 3.895H9.5c-2.353 0-4.689-1.557-4.867-3.895L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                        </path>
                                    </svg>
                                </button>
                            </form>
                        </div>

                        <div class="flex flex-col h-full">
                            <div
                                class="w-12 h-12 bg-gray-50 text-gray-400 rounded-xl flex items-center justify-center mb-6 border border-gray-100 group-hover:bg-blue-50 group-hover:text-blue-500 transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                    </path>
                                </svg>
                            </div>

                            <div class="mb-6">
                                <h3
                                    class="text-xl font-bold text-slate-800 mb-2 truncate group-hover:text-blue-600 transition-colors">
                                    {{ $link->titre }}</h3>
                                <a href="{{ $link->url }}" target="_blank"
                                    class="text-gray-400 text-sm font-medium italic break-all hover:text-blue-400 transition-colors block">
                                    {{ Str::limit($link->url, 40) }}
                                </a>
                            </div>

                            <div class="mt-auto flex justify-between items-center pt-6 border-gray-50">
                                <span
                                    class="px-3 py-1 bg-blue-50 text-[10px] font-extrabold text-blue-500 tracking-widest border-small rounded-xl">
                                    {{ $link->categorie->name }}
                                </span>
                                <span class="text-xs font-bold text-gray-300 tracking-tighter">
                                    {{ $link->created_at->format('d/m/Y') }}
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </main>
    </div>

</body>

</html>
