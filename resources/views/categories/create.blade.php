<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odin - Create Category</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
<body class="bg-[#f8fafc] text-[#1e293b]">

    <div class="flex min-h-screen">
        @include('layout.sidebar')

        <main class="flex-1 p-12 flex justify-center items-start">
            
            <div class="w-full max-w-2xl">

                <header class="mb-10 flex flex-col justify-center  items-center gap-2">
                    <h2 class="text-3xl font-extrabold text-[#1e293b] mb-1">Create New Category</h2>
                    <p class="text-gray-400 font-medium">Organize your links into logical groups.</p>
                </header>

                <div class="bg-white p-10 rounded-2xl shadow-2xl border border-gray-50">
                    <form action="{{ route('categories.store') }}" method="POST">
                        @csrf
                        
                        <div class="mb-8">
                            <label for="name" class="block text-sm font-bold text-slate-700 mb-3 ml-1">
                                Category Name
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-5 flex items-center text-gray-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg>
                                </div>
                                <input type="text" id="name" name="name" placeholder="e.g. Design, Development, News..." required
                                    class="w-full pl-14 pr-6 py-4 bg-[#f8fafc] border border-gray-100 rounded-2xl focus:outline-none focus:ring-2 focus:ring-blue-100 focus:border-blue-400 transition placeholder:text-gray-300 font-medium text-slate-600">
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <button type="submit"
                                class="flex-1 py-4 bg-[#0ea5e9] hover:bg-[#0284c7] text-white font-bold rounded-2xl shadow-lg shadow-blue-100 transition-all active:scale-[0.98]">
                                Create Category
                            </button>
                            <a href="{{ route('categories.index') }}" 
                                class="px-8 py-4 bg-gray-50 hover:bg-gray-100 text-gray-500 font-bold rounded-2xl transition-colors text-center">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>

        </main>
    </div>

</body>
</html>