<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RentManager - Dashboard</title>

    {{-- Tailwind CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- FontAwesome --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    {{-- Font --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-50">

{{-- Mobile Backdrop --}}
<div id="sidebarBackdrop" class="fixed inset-0 bg-slate-900/50 z-40 hidden lg:hidden"></div>

{{-- Sidebar --}}
<aside id="sidebar"
    class="fixed top-0 left-0 z-50 w-64 h-screen transition-transform -translate-x-full lg:translate-x-0 bg-white border-r">

    <div class="h-full px-3 py-4 flex flex-col">

        {{-- Logo --}}
        <div class="flex items-center mb-8 px-2">
            <div class="bg-blue-600 p-2 rounded-lg mr-3">
                <i class="fas fa-home text-white"></i>
            </div>
            <span class="text-xl font-bold">RentManager</span>
        </div>

        {{-- Menu --}}
        <ul class="space-y-2 flex-1">
            <li>
                <a href="{{ route('dashboard') }}"
                   class="flex items-center p-3 rounded-lg bg-blue-50 text-blue-600">
                    <i class="fas fa-th-large w-5"></i>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="#" class="flex items-center p-3 rounded-lg text-slate-600 hover:bg-slate-100">
                    <i class="fas fa-building w-5"></i>
                    <span class="ms-3">Properties</span>
                </a>
            </li>

            <li>
                <a href="#" class="flex items-center p-3 rounded-lg text-slate-600 hover:bg-slate-100">
                    <i class="fas fa-users w-5"></i>
                    <span class="ms-3">Tenants</span>
                </a>
            </li>

            <li>
                <a href="#" class="flex items-center p-3 rounded-lg text-slate-600 hover:bg-slate-100">
                    <i class="fas fa-wallet w-5"></i>
                    <span class="ms-3">Payments</span>
                </a>
            </li>
        </ul>

        {{-- Bottom --}}
        <div class="border-t pt-4 space-y-2">

            {{-- Settings --}}
            <a href="#" class="flex items-center p-3 rounded-lg text-slate-600 hover:bg-slate-100">
                <i class="fas fa-cog w-5"></i>
                <span class="ms-3">Settings</span>
            </a>

            {{-- Logout (Breeze) --}}
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="w-full flex items-center p-3 rounded-lg text-red-500 hover:bg-red-50">
                    <i class="fas fa-sign-out-alt w-5"></i>
                    <span class="ms-3">Logout</span>
                </button>
            </form>

        </div>
    </div>
</aside>

{{-- Main --}}
<div class="p-4 lg:ml-64">

    {{-- Navbar --}}
    <nav class="flex justify-between items-center mb-8 bg-white p-4 rounded-xl shadow-sm">

        <div class="flex items-center">
            <button id="sidebarToggle"
                class="lg:hidden p-2 mr-2 rounded-lg hover:bg-slate-100">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <div class="flex items-center gap-4">
            <div class="text-right hidden sm:block">
                <p class="text-sm font-semibold">{{ Auth::user()->name }}</p>
                <p class="text-xs text-slate-500">{{ Auth::user()->email }}</p>
            </div>

            <img
                class="w-10 h-10 rounded-full"
                src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=2563eb&color=fff">
        </div>
    </nav>

    {{-- Stats --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

        <div class="bg-white p-6 rounded-xl border shadow-sm">
            <h3 class="text-sm text-slate-500">Total Collected</h3>
            <p class="text-2xl font-bold">$42,500</p>
        </div>

        <div class="bg-white p-6 rounded-xl border shadow-sm">
            <h3 class="text-sm text-slate-500">Occupied Units</h3>
            <p class="text-2xl font-bold">92%</p>
        </div>

        <div class="bg-white p-6 rounded-xl border shadow-sm">
            <h3 class="text-sm text-slate-500">Active Tenants</h3>
            <p class="text-2xl font-bold">148</p>
        </div>

        <div class="bg-white p-6 rounded-xl border shadow-sm">
            <h3 class="text-sm text-slate-500">Pending Tasks</h3>
            <p class="text-2xl font-bold">12</p>
        </div>

    </div>
</div>

{{-- JS --}}
<script>
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('sidebarToggle');
    const backdrop = document.getElementById('sidebarBackdrop');

    toggleBtn.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
        backdrop.classList.toggle('hidden');
    });

    backdrop.addEventListener('click', () => {
        sidebar.classList.add('-translate-x-full');
        backdrop.classList.add('hidden');
    });
</script>

</body>
</html>
