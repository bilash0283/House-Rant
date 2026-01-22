<!DOCTYPE html>
<html lang="en" class="scroll-smooth"
      x-data="{
        sidebarOpen: false,
        darkMode: localStorage.getItem('darkMode') === 'true' || (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches),
        toggleDark() {
          this.darkMode = !this.darkMode;
          localStorage.setItem('darkMode', this.darkMode);
        }
      }"
      :class="{ 'dark': darkMode }">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Fixed Responsive Dashboard</title>

  <!-- Tailwind CDN (development only) -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          colors: {
            primary: '#3b82f6',
          }
        }
      }
    }
  </script>

  <!-- Alpine.js -->
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-50 dark:bg-gray-950 text-gray-900 dark:text-gray-100 min-h-screen font-sans antialiased">

  <!-- Mobile Sidebar Overlay -->
  <div x-show="sidebarOpen"
       @click="sidebarOpen = false"
       class="fixed inset-0 bg-black/50 backdrop-blur-sm z-40 md:hidden transition-opacity duration-300"
       :class="{ 'opacity-0 pointer-events-none': !sidebarOpen }"></div>

  <!-- Sidebar -->
  <aside x-cloak
         class="fixed inset-y-0 left-0 z-50 w-72 bg-gray-900 text-white shadow-2xl transform transition-transform duration-300 ease-in-out md:translate-x-0 md:relative md:shadow-none"
         :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'">
    
    <div class="flex items-center justify-between p-6 border-b border-gray-800">
      <div class="flex items-center gap-3">
        <span class="text-2xl font-bold text-blue-500">Tail</span>
        <span class="text-2xl font-bold">Admin</span>
      </div>
      <button @click="sidebarOpen = false" class="md:hidden text-gray-400 hover:text-white text-2xl">
        ×
      </button>
    </div>

    <nav class="p-5 space-y-2">
      <a href="#" class="flex items-center px-4 py-3 bg-gray-800 rounded-xl text-blue-400">
        <span class="mr-3 text-xl">🏠</span> Dashboard
      </a>
      <div class="pt-6">
        <div class="px-4 py-2 text-xs uppercase text-gray-500 font-semibold tracking-wider">eCommerce</div>
        <a href="#" class="block px-4 py-2.5 hover:bg-gray-800 rounded-lg mt-1">Customers</a>
        <a href="#" class="block px-4 py-2.5 hover:bg-gray-800 rounded-lg">Orders</a>
      </div>
      <div class="pt-6">
        <div class="px-4 py-2 text-xs uppercase text-gray-500 font-semibold tracking-wider">Others</div>
        <a href="#" class="block px-4 py-2.5 hover:bg-gray-800 rounded-lg mt-1">Calendar</a>
        <a href="#" class="block px-4 py-2.5 hover:bg-gray-800 rounded-lg">Profile</a>
      </div>
    </nav>
  </aside>

  <!-- Main Content Area -->
  <div class="flex flex-col min-h-screen md:ml-72 transition-all duration-300">

    <!-- Topbar -->
    <header class="bg-white dark:bg-gray-800 shadow-sm sticky top-0 z-30">
      <div class="flex items-center justify-between px-4 py-3.5 md:px-6">
        <div class="flex items-center gap-4">
          <button @click="sidebarOpen = !sidebarOpen" class="md:hidden focus:outline-none text-gray-700 dark:text-gray-300">
            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
          <h1 class="text-xl font-semibold">Dashboard</h1>
        </div>

        <div class="flex items-center gap-5">
          <button @click="toggleDark()" class="text-2xl focus:outline-none">
            <span x-text="darkMode ? '🌙' : '☀️'"></span>
          </button>
          <button class="relative text-2xl text-gray-600 dark:text-gray-300">
            🔔
            <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full px-1.5 py-0.5">3</span>
          </button>
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold">B</div>
            <div class="hidden md:block text-right">
              <div class="font-medium">Bilash</div>
              <div class="text-xs text-gray-500 dark:text-gray-400">Admin</div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Dashboard Content -->
    <main class="flex-1 p-4 md:p-6 lg:p-8 bg-gray-50 dark:bg-gray-950">

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

        <div class="bg-white dark:bg-gray-800 rounded-xl shadow p-6">
          <h3 class="text-lg font-semibold">Customers</h3>
          <p class="text-4xl font-bold mt-2 text-blue-600">3,782</p>
          <p class="text-sm text-green-600 mt-1">↑ 11.01%</p>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-xl shadow p-6">
          <h3 class="text-lg font-semibold">Orders</h3>
          <p class="text-4xl font-bold mt-2 text-green-600">5,359</p>
          <p class="text-sm text-red-600 mt-1">↓ 9.05%</p>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-xl shadow p-6">
          <h3 class="text-lg font-semibold">Target Progress</h3>
          <p class="text-5xl font-bold mt-2 text-purple-600 text-center">75.55%</p>
          <p class="text-sm text-gray-500 dark:text-gray-400 mt-2 text-center">Monthly Goal</p>
        </div>

      </div>

      <!-- Sales Chart -->
      <div class="mt-8 bg-white dark:bg-gray-800 rounded-xl shadow p-6">
        <h3 class="text-xl font-semibold mb-6">Monthly Sales</h3>
        <div class="h-72 md:h-80">
          <canvas id="salesChart"></canvas>
        </div>
      </div>

    </main>
  </div>

  <!-- Chart Script -->
  <script>
    const ctx = document.getElementById('salesChart').getContext('2d');
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
        datasets: [{
          data: [12,25,18,22,15,28,19,23,14,32,21,16],
          backgroundColor: '#3b82f6',
          borderRadius: 8,
          barThickness: 28,
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          y: { beginAtZero: true, grid: { color: '#4b5563' } },
          x: { grid: { display: false } }
        },
        plugins: { legend: { display: false } }
      }
    });
  </script>

  <!-- Hide sidebar on desktop resize if it was open from mobile -->
  <script>
    window.addEventListener('resize', () => {
      if (window.innerWidth >= 768) {
        Alpine.$data(document.documentElement).sidebarOpen = false;
      }
    });
  </script>

  <style>
    [x-cloak] { display: none !important; }
  </style>

</body>
</html>