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
    @include('layout.sidebar')
    <div class="flex w-3xl">

        <form action="{{ route('categories.store') }}" method="POST" class="flex-1 p-12">
            @csrf
            <header class="mb-1">
                <h2 class="text-3xl font-extrabold text-[#1e293b] mb-1">Create New Category</h2>
                <p class="text-gray-400 font-medium">Organize your links into logical groups.</p>
            </header>

            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-50">
                <div class="mb-5">
                    <label for="name" class="block text-sm font-bold text-slate-700 mb-2 ml-1">Category Name</label>
                    <input type="text" id="name" name="name" placeholder="e.g. Tools, News, etc." required
                        class="w-full px-5 py-4 bg-white border border-gray-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-blue-100 focus:border-blue-400 transition placeholder:text-gray-300">
                </div>
                <button type="submit"
                    class="w-full py-4 bg-[#0ea5e9] hover:bg-[#0284c7] text-white font-bold rounded-2xl shadow-lg shadow-blue-200 transition-all active:scale-[0.98] mt-4">
                    Create Category
                </button>
            </div>
        </form>
    </div>

</body>
