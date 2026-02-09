<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odin Dashboard</title>
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
            <header class="mb-10">
                <h2 class="text-3xl font-extrabold text-[#1e293b] mb-1">Welcome back, <span class="text-[#0ea5e9]">{{ auth()->user()->name }}</span></h2>
                <p class="text-gray-400 font-medium">Here's an overview of your bookmarks.</p>
            </header>

            <div class="grid grid-cols-3 gap-8 mb-12">
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-50 flex justify-between items-center">
                    <div>
                        <p class="text-gray-400 text-sm font-semibold mb-1">Total Links</p>
                        <h3 class="text-4xl font-bold text-[#1e293b]">{{ $links->count() }}</h3>
                    </div>
                    <div
                        class="w-14 h-14 bg-[#f0f9ff] text-[#0ea5e9] rounded-full flex items-center justify-center border border-[#e0f2fe]">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1">
                            </path>
                        </svg>
                    </div>
                </div>
                <div
                    class="bg-white p-8 rounded-2xl shadow-sm border border-gray-50 flex justify-between items-center text-gray-500">
                    <div>
                        <p class="text-gray-400 text-sm font-semibold mb-1">Categories</p>
                        <h3 class="text-4xl font-bold text-[#1e293b]">{{ $categories->count() }}</h3>
                    </div>
                    <div
                        class="w-14 h-14 bg-[#fffbeb] text-[#f59e0b] rounded-full flex items-center justify-center border border-[#fef3c7]">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                        </svg>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-50 flex justify-between items-center">
                    <div>
                        <p class="text-gray-400 text-sm font-semibold mb-1">Tags</p>
                        <h3 class="text-4xl font-bold text-[#1e293b]">{{ $tags->count() }}</h3>
                    </div>
                    <div
                        class="w-14 h-14 bg-[#f0fdf4] text-[#10b981] rounded-full flex items-center justify-center border border-[#dcfce7]">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-12 gap-10 items-start">

                <div class="col-span-8">
                    <div class="flex justify-between items-center mb-6 px-2">
                        <h4 class="text-xl font-bold text-[#1e293b]">Recent Links</h4>
                        <a href="{{ route('links.index') }}"
                            class="text-[#0ea5e9] font-bold text-sm flex items-center gap-1">View All -></a>
                    </div>

                    <div class="space-y-4">
                        @foreach ($links as $link)
                            <div
                                class="bg-white p-6 rounded-2xl border border-gray-50 flex items-start gap-5 group hover:shadow-md transition shadow-sm">
                                <div
                                    class="w-12 h-12 bg-[#f0f9ff] text-[#0ea5e9] rounded-xl flex items-center justify-center shrink-0 border border-[#e0f2fe]">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                        </path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <div class="flex justify-between items-start mb-1">
                                        <h5 class="font-bold text-[#1e293b] text-lg">{{ $link->titre }}</h5>
                                        <span
                                            class="text-[10px] font-extrabold text-[#0ea5e9] uppercase tracking-wider">{{ $link->categorie->name }}</span>
                                    </div>
                                    <p class="text-gray-400 text-sm font-medium mb-4 italic">{{ $link->url }}</p>
                                    <div class="flex gap-2">
                                        <span
                                            class="px-3 py-1 bg-[#f1f5f9] text-gray-500 text-[10px] font-bold rounded-full uppercase">#video</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-span-4">
                    <h4 class="text-xl font-bold text-[#1e293b] mb-6">Quick Categories</h4>
                    <div class="space-y-2">
                        @foreach ($categories as $category)
                            <div class="bg-white rounded-2xl border border-gray-50 shadow-sm overflow-hidden">
                                <div
                                    class="p-4 border-b border-gray-50 flex justify-between items-center hover:bg-gray-50 cursor-pointer transition">
                                    <div class="flex items-center gap-4">
                                        <span class="w-2.5 h-2.5 rounded-full bg-blue-300"></span>
                                        <span class="font-bold text-gray-600">{{ $category->name }}</span>
                                    </div>
                                    <span
                                        class="w-8 h-8 flex items-center justify-center border border-gray-100 rounded-lg text-xs font-bold text-gray-400">{{ $category->links_count }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

    </div>
    </main>
    </div>

</body>

</html>
