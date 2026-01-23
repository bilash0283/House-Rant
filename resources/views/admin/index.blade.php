@include('admin/layouts/header')
{{-- Sidebar --}}
@include('admin/layouts/sidebar')

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

    {{-- main content --}}
    @yield('content')
    
</div>

@include('admin.layouts.footer')
