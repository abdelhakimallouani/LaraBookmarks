<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odin - Tags Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>

<body class="bg-[#f8fafc] text-[#1e293b]">

    <div class="flex min-h-screen">
        @include('layout.sidebar')

        <main class="flex-1 p-12 flex flex-col items-center">

            <header class="mb-12 text-center">
                <h2 class="text-3xl font-extrabold text-[#1e293b] mb-1">Tags Management</h2>
                <p class="text-gray-400 font-medium">Use tags to create granular organization for your links.</p>
            </header>

            <div class="w-full max-w-4xl space-y-10">
                
                <div class="flex items-center gap-4 w-full">
                    <form action="{{ route('tags.store') }}" method="POST" class="flex-1 flex items-center gap-4">
                        @csrf
                        <div class="relative flex-1">
                            <div class="absolute inset-y-0 left-6 flex items-center pointer-events-none text-gray-400">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </div>
                            <input type="text" name="name" placeholder="Search or add a new tag..." required
                                class="w-full pl-16 pr-6 py-4 bg-white border border-transparent rounded-2xl shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-100 focus:border-blue-300 transition-all placeholder:text-gray-400 font-medium text-slate-600">
                        </div>
                        
                        <button type="submit" 
                            class="bg-[#0ea5e9] hover:bg-[#0284c7] text-white px-8 py-4 rounded-xl font-bold flex items-center gap-2 transition-all active:scale-95 shadow-md shadow-blue-50">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                            </svg>
                            Add Tag
                        </button>
                    </form>
                </div>

                <div class="flex flex-wrap justify-center gap-3">
                    @foreach($tags as $tag)
                    <div class="group flex items-center gap-2 bg-white border border-gray-100 px-5 py-2.5 rounded-xl shadow-sm hover:border-blue-200 transition-all cursor-default">
                        <span class="text-[#1e293b] font-semibold text-sm hover:text-[#0ea5e9]">#{{ $tag->name }}</span>
                        
                        <form action="{{ route('tags.destroy', $tag->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-gray-300 hover:text-red-400 transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                    @endforeach
                </div>

            </div>

        </main>
    </div>

</body>
</html>