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
                
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-4">
                    <form action="{{ route('tags.store') }}" method="POST" class="flex items-center gap-4">
                        @csrf
                        <div class="relative flex-1">
                            <div class="absolute inset-y-0 left-5 flex items-center pointer-events-none text-gray-400">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                </svg>
                            </div>
                            <input type="text" name="name" placeholder="Type a new tag name..." required
                                class="w-full pl-14 pr-6 py-4 bg-white rounded-2xl focus:outline-none text-slate-600 font-medium placeholder:text-gray-300">
                        </div>
                        <button type="submit" 
                            class="bg-[#0ea5e9] hover:bg-[#0284c7] text-white px-8 py-4 rounded-xl font-bold flex items-center gap-2 transition-all active:scale-95 shadow-lg shadow-blue-100">
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
                        <span class="text-[#1e293b] font-semibold text-sm">#{{ $tag->name }}</span>
                        
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