<aside id="sidebar"
    class="fixed top-0 left-0 z-50 w-64 h-screen transition-transform -translate-x-full lg:translate-x-0 bg-white border-r">

    <div class="h-full px-3 py-4 flex flex-col">

        {{-- Logo --}}
        <div class="flex items-center mb-8 px-2">
            <div class="bg-blue-600 p-2 rounded-lg mr-3">
                <i class="fas fa-home text-white"></i>
            </div>
            <span class="text-xl font-bold">Rent-Manager</span>
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