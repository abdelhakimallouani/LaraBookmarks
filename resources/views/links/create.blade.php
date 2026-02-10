<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odin - Create Link</title>
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

        <main class="flex-1 p-12 flex justify-center items-start">

            <div class="w-full max-w-4xl flex flex-col items-center">

                <header class="mb-8 text-center">
                    <h2 class="text-3xl font-extrabold text-[#1e293b] mb-1">My Links</h2>
                    <p class="text-gray-400 font-medium text-sm">Add a new destination to your digital library.</p>
                </header>

                <div class="bg-white w-full max-w-2xl rounded-2xl shadow-2xl p-8 relative border border-white">

                    <h2 class="text-xl font-bold text-[#1e293b] mb-6">Add New Bookmark</h2>

                    <form action="{{ route('links.store') }}" method="POST" class="space-y-5">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div class="space-y-2">
                                <label for="titre"
                                    class="block text-xs font-bold text-slate-700 ml-1 uppercase tracking-wider">Title</label>
                                <input type="text" id="titre" name="titre" placeholder="e.g. Replit" required
                                    class="w-full px-5 py-3 bg-[#f8fafc] border border-gray-100 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-100 focus:border-blue-400 transition placeholder:text-gray-400 font-medium text-slate-600">
                            </div>

                            <div class="space-y-2">
                                <label for="category"
                                    class="block text-xs font-bold text-slate-700 ml-1 uppercase tracking-wider">
                                    Category
                                </label>

                                <select id="category" name="categorie_id" required
                                    class="w-full px-5 py-3 bg-[#f8fafc] border border-gray-100 rounded-xl">
                                    <option value="" disabled selected>Select category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="space-y-2">
                                <label class="block text-xs font-bold text-slate-700 ml-1 uppercase tracking-wider">
                                    Tags
                                </label>

                                <div class="w-full flex gap-2">
                                    @foreach ($tags as $tag)
                                        <label
                                            class="flex items-center space-x-2 bg-gray-50 px-3 py-2 rounded-lg cursor-pointer">
                                            <input type="checkbox" name="tags[]" value="{{ $tag->id }}"
                                                class="rounded border-gray-300 text-blue-500 focus:ring-blue-400">

                                            <span class="text-sm text-gray-700">
                                                #{{ $tag->name }}
                                            </span>
                                        </label>
                                    @endforeach
                                </div>
                            </div>


                        </div>

                        <div class="space-y-2">
                            <label for="url"
                                class="block text-xs font-bold text-slate-700 ml-1 uppercase tracking-wider">URL</label>
                            <input type="url" id="url" name="url" placeholder="https://..." required
                                class="w-full px-5 py-3 bg-[#f8fafc] border border-gray-100 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-100 focus:border-blue-400 transition placeholder:text-gray-400 font-medium text-slate-600">
                        </div>

                        <div class="pt-4 flex items-center justify-between border-t border-gray-50">
                            <a href="{{ route('links.index') }}"
                                class="text-sm text-gray-400 font-bold hover:text-gray-600 transition-colors">
                                Cancel
                            </a>
                            <button type="submit"
                                class="bg-[#0ea5e9] hover:bg-[#0284c7] text-white px-8 py-3 rounded-xl font-bold shadow-md shadow-blue-100 transition-all active:scale-[0.98] text-sm">
                                Save Link
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </main>
    </div>

</body>

</html>
