<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odin - Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .bg-odin { background: radial-gradient(circle at top left, #f0f9ff 0%, #e0f2fe 50%, #f8fafc 100%); }
    </style>
</head>
<body class="bg-odin min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-[500px] bg-white rounded-2xl shadow-xl shadow-blue-100/50 p-10 border border-white">
        
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-[#0ea5e9] mb-2">Odin</h1>
            <p class="text-gray-500 font-medium text-sm">Join us to manage your links.</p>
        </div>

        <div class="bg-gray-100/80 p-1.5 rounded-2xl flex mb-8">
            <a href="/login" class="flex-1 py-2.5 text-center text-sm font-bold rounded-xl text-gray-400 hover:text-gray-600 transition">
                Login
            </a>
            <div class="flex-1 py-2.5 text-center text-sm font-bold rounded-xl bg-white shadow-sm text-slate-800">
                Register
            </div>
        </div>

        <form method="POST" action="{{ route('register') }}" class="space-y-5">
            @csrf
            <div>
                <label for="name" class="block text-sm font-bold text-slate-700 mb-2 ml-1">Full Name</label>
                <input type="text" id="name" name="name" placeholder="John Doe" required
                    class="w-full px-5 py-4 bg-white border border-gray-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-blue-100 focus:border-blue-400 transition placeholder:text-gray-300">
            </div>
            <div>
                <label for="email" class="block text-sm font-bold text-slate-700 mb-2 ml-1">Email Address</label>
                <input type="email" id="email" name="email" placeholder="hello@example.com" required
                    class="w-full px-5 py-4 bg-white border border-gray-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-blue-100 focus:border-blue-400 transition placeholder:text-gray-300">
            </div>
            <div>
                <label for="password" class="block text-sm font-bold text-slate-700 mb-2 ml-1">Password</label>
                <input type="password" id="password" name="password" placeholder="••••••••" required
                    class="w-full px-5 py-4 bg-white border border-gray-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-blue-100 focus:border-blue-400 transition">
            </div>
            
            <button type="submit" class="w-full py-4 bg-[#0ea5e9] hover:bg-[#0284c7] text-white font-bold rounded-2xl shadow-lg shadow-blue-200 transition-all active:scale-[0.98] mt-4">
                Create Account
            </button>
        </form>
    </div>

</body>
</html>