<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odin - My Links</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
<body class="bg-[#f8fafc] text-[#1e293b]">

    <div class="flex">
        @include('layout/sidebar.php')

        <main class="flex-1 p-12">
            <header class="flex justify-between items-start mb-10">
                <div>
                    <h2 class="text-3xl font-extrabold text-[#1e293b] mb-1">My Links</h2>
                    <p class="text-gray-400 font-medium">Manage and organize your digital library.</p>
                </div>
                <button class="bg-[#0ea5e9] hover:bg-[#0284c7] text-white px-6 py-3 rounded-xl font-bold flex items-center gap-2 shadow-lg shadow-blue-100 transition-all active:scale-95">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 4v16m8-8H4"></path></svg>
                    Add New Link
                </button>
            </header>

            <div class="flex gap-4 mb-10">
                <div class="relative flex-1">
                    <span class="absolute inset-y-0 left-4 flex items-center text-gray-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </span>
                    <input type="text" placeholder="Search links..." 
                        class="w-full pl-12 pr-4 py-3.5 bg-white border border-gray-100 rounded-2xl focus:outline-none focus:ring-2 focus:ring-blue-50 focus:border-blue-300 shadow-sm transition">
                </div>
                <div class="relative">
                    <select class="appearance-none pl-12 pr-10 py-3.5 bg-white border border-gray-100 rounded-2xl focus:outline-none focus:ring-2 focus:ring-blue-50 focus:border-blue-300 shadow-sm transition font-medium text-gray-600 cursor-pointer">
                        <option>All Categories</option>
                        <option>Development</option>
                        <option>Design</option>
                        <option>Marketing</option>
                    </select>
                    <span class="absolute inset-y-0 left-4 flex items-center text-gray-400 pointer-events-none">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path></svg>
                    </span>
                    <span class="absolute inset-y-0 right-4 flex items-center text-gray-400 pointer-events-none">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </span>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <div class="bg-white p-8 rounded-[2rem] border border-gray-50 shadow-sm hover:shadow-md transition-shadow group">
                    <div class="w-12 h-12 bg-gray-50 text-gray-400 rounded-xl flex items-center justify-center mb-6 border border-gray-100 group-hover:bg-blue-50 group-hover:text-blue-500 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-1">Replit</h3>
                    <p class="text-gray-400 text-sm font-medium mb-10 italic">https://replit.com</p>
                    
                    <div class="flex justify-between items-center pt-6 border-t border-gray-50">
                        <span class="text-sm font-bold text-blue-500 uppercase tracking-tight">Development</span>
                        <span class="text-xs font-bold text-gray-300 tracking-tighter">03/02/2026</span>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-[2rem] border border-gray-50 shadow-sm hover:shadow-md transition-shadow group">
                    <div class="w-12 h-12 bg-gray-50 text-gray-400 rounded-xl flex items-center justify-center mb-6 border border-gray-100 group-hover:bg-pink-50 group-hover:text-pink-500 transition-colors text-gray-400">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-1">Dribbble</h3>
                    <p class="text-gray-400 text-sm font-medium mb-10 italic">https://dribbble.com</p>
                    
                    <div class="flex justify-between items-center pt-6 border-t border-gray-50">
                        <span class="text-sm font-bold text-[#be185d] uppercase tracking-tight">Design</span>
                        <span class="text-xs font-bold text-gray-300 tracking-tighter">03/02/2026</span>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-[2rem] border border-gray-50 shadow-sm hover:shadow-md transition-shadow group">
                    <div class="w-12 h-12 bg-gray-50 rounded-xl flex items-center justify-center mb-6 border border-gray-100 group-hover:bg-amber-50 group-hover:text-amber-500 transition-colors text-gray-400">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-1">Awwwards</h3>
                    <p class="text-gray-400 text-sm font-medium mb-10 italic">https://awwwards.com</p>
                    
                    <div class="flex justify-between items-center pt-6 border-t border-gray-50">
                        <span class="text-sm font-bold text-amber-600 uppercase tracking-tight">Inspiration</span>
                        <span class="text-xs font-bold text-gray-300 tracking-tighter">03/02/2026</span>
                    </div>
                </div>

            </div>
        </main>
    </div>

</body>
</html>