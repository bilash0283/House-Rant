<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent-Manager | Login</title>

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
<body class="bg-slate-100">
<div class="min-h-screen flex items-center justify-center px-4">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl border border-slate-200 p-8">
        {{-- Logo --}}
        <div class="text-center mb-6">
            <div class="mx-auto w-14 h-14 bg-blue-600 rounded-xl flex items-center justify-center mb-3">
                <i class="fas fa-home text-white text-2xl"></i>
            </div>
            <h1 class="text-2xl font-bold text-slate-800">Rent-Manager</h1>
            <p class="text-sm text-slate-500 mt-1">
                Property & Rent Management System
            </p>
        </div>
        {{-- Session Status --}}
        @if (session('status'))
            <div class="mb-4 text-sm text-green-600 text-center">
                {{ session('status') }}
            </div>
        @endif

        {{-- Login Form --}}
        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            {{-- Email --}}
            <div>
                <label for="email" class="block text-sm font-medium text-slate-700">
                    Email Address
                </label>
                <input
                    id="email"
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autofocus
                    autocomplete="username"
                    class="mt-1 p-2 w-full border border-spacing-1 rounded-lg border-slate-300 focus:border-blue-500 focus:ring-blue-500">

                @error('email')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            {{-- Password --}}
            <div>
                <label for="password" class="block text-sm font-medium text-slate-700">
                    Password
                </label>
                <input
                    id="password"
                    type="password"
                    name="password"
                    required
                    autocomplete="current-password"
                    class="mt-1 p-2 border border-spacing-1 w-full rounded-lg border-slate-300 focus:border-blue-500 focus:ring-blue-500">

                @error('password')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            {{-- Remember + Forgot --}}
            <div class="flex items-center justify-between text-sm">
                <label class="flex items-center gap-2">
                    <input
                        type="checkbox"
                        name="remember"
                        class="rounded border-slate-300 text-blue-600 focus:ring-blue-500">
                    <span class="text-slate-600">Remember me</span>
                </label>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}"
                       class="text-blue-600 hover:underline font-medium">
                        Forgot password?
                    </a>
                @endif
            </div>

            {{-- Submit --}}
            <button
                type="submit"
                class="w-full py-3 rounded-lg bg-blue-600 text-white font-semibold hover:bg-blue-700 transition">
                Login
            </button>
        </form>

        {{-- Footer --}}
        <div class="mt-6 text-center text-xs text-slate-400">
            © {{ date('Y') }} RentManager. All rights reserved.
        </div>
    </div>
</div>
</body>
</html>
