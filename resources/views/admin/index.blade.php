<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth" x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' }" :class="{ 'dark': darkMode }">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- যদি টেমপ্লেটে আলাদা font থাকে তাহলে যোগ করো -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"> -->
</head>
<body class="bg-gray-100 dark:bg-gray-950 text-gray-900 dark:text-gray-100 min-h-screen antialiased">

    <!-- Sidebar / Header / যা থাকবে -->
      <!-- আলাদা করে রাখতে পারো -->

    <!-- Main Content -->
    <div class="flex flex-col min-h-screen">
        <header>
            <!-- তোমার টেমপ্লেটের navbar / topbar কপি করে পেস্ট করো -->
        </header>

        <main class="flex-1 p-4 md:p-6 lg:p-8">
            @yield('content')
        </main>
    </div>

    <!-- Dark mode toggle logic (Alpine) -->
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('darkMode', {
                init() {
                    if (localStorage.getItem('darkMode') === null) {
                        localStorage.setItem('darkMode', window.matchMedia('(prefers-color-scheme: dark)').matches);
                    }
                    this.$watch('darkMode', value => {
                        localStorage.setItem('darkMode', value);
                        if (value) {
                            document.documentElement.classList.add('dark');
                        } else {
                            document.documentElement.classList.remove('dark');
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>