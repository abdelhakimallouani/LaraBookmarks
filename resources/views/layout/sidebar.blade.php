<aside class="w-64 bg-white border-r border-gray-100 flex flex-col justify-between py-8 px-6 h-screen sticky top-0 shrink-0">
    <div>
        <div class="mb-10">
            <h1 class="text-2xl font-bold text-[#0ea5e9] flex justify-center ">Odin</h1>
            <p class="text-[10px] text-gray-400 font-bold uppercase tracking-[0.15em] flex justify-center">Bookmark Manager</p>
        </div>

        <nav class="space-y-1">
            <a href="#" class="flex items-center gap-4 px-4 py-3 bg-[#e0f2fe] text-[#0ea5e9] rounded-xl font-bold transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                Dashboard
            </a>
            <a href="{{ route('links.index') }}" class="flex items-center gap-4 px-4 py-3 text-gray-500 hover:bg-gray-50 rounded-xl font-medium transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                Links
            </a>
            <a href="{{ route('categories.index') }}" class="flex items-center gap-4 px-4 py-3 text-gray-500 hover:bg-gray-50 rounded-xl font-medium transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg>
                Categories
            </a>
            <a href="#" class="flex items-center gap-4 px-4 py-3 text-gray-500 hover:bg-gray-50 rounded-xl font-medium transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path></svg>
                Tags
            </a>
        </nav>
    </div>

    <a href="{{ route('logout') }}" class="flex items-center gap-4 px-4 py-3 text-[#ef4444] hover:bg-red-50 rounded-xl font-bold transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
        Logout
    </a>
</aside>