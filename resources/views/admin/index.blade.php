<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RentManager - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-50">

    <!-- Mobile Sidebar Backdrop -->
    <div id="sidebarBackdrop" class="fixed inset-0 bg-slate-900/50 z-40 hidden lg:hidden"></div>

    <!-- Sidebar -->
    <aside id="sidebar" class="fixed top-0 left-0 z-50 w-64 h-screen transition-transform -translate-x-full lg:translate-x-0 bg-white border-r border-slate-200">
        <div class="h-full px-3 py-4 overflow-y-auto flex flex-col">
            <!-- Logo -->
            <div class="flex items-center ps-2.5 mb-8">
                <div class="bg-blue-600 p-2 rounded-lg mr-3">
                    <i class="fas fa-home text-white"></i>
                </div>
                <span class="self-center text-xl font-bold whitespace-nowrap text-slate-800">RentManager</span>
            </div>

            <!-- Navigation Links -->
            <ul class="space-y-2 font-medium flex-1">
                <li>
                    <a href="#" class="flex items-center p-3 text-blue-600 bg-blue-50 rounded-lg group">
                        <i class="fas fa-th-large w-5 h-5 transition duration-75"></i>
                        <span class="ms-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-3 text-slate-600 rounded-lg hover:bg-slate-100 group transition">
                        <i class="fas fa-building w-5 h-5"></i>
                        <span class="ms-3">Properties</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-3 text-slate-600 rounded-lg hover:bg-slate-100 group transition">
                        <i class="fas fa-users w-5 h-5"></i>
                        <span class="ms-3">Tenants</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-3 text-slate-600 rounded-lg hover:bg-slate-100 group transition">
                        <i class="fas fa-wallet w-5 h-5"></i>
                        <span class="ms-3">Payments</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-3 text-slate-600 rounded-lg hover:bg-slate-100 group transition">
                        <i class="fas fa-tools w-5 h-5"></i>
                        <span class="ms-3">Maintenance</span>
                        <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full">3</span>
                    </a>
                </li>
            </ul>

            <!-- Bottom Section -->
            <div class="pt-4 mt-4 space-y-2 border-t border-slate-100">
                <a href="#" class="flex items-center p-3 text-slate-600 rounded-lg hover:bg-slate-100 group">
                    <i class="fas fa-cog w-5 h-5 text-slate-400 group-hover:text-slate-600"></i>
                    <span class="ms-3">Settings</span>
                </a>
                <a href="#" class="flex items-center p-3 text-red-500 rounded-lg hover:bg-red-50 group">
                    <i class="fas fa-sign-out-alt w-5 h-5"></i>
                    <span class="ms-3">Logout</span>
                </a>
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="p-4 lg:ml-64">
        
        <!-- Header -->
        <nav class="flex items-center justify-between mb-8 bg-white p-4 rounded-xl shadow-sm border border-slate-100">
            <div class="flex items-center">
                <!-- Mobile Menu Button -->
                <button id="sidebarToggle" class="p-2 mr-2 text-slate-600 rounded-lg lg:hidden hover:bg-slate-100 focus:ring-2 focus:ring-slate-200">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="hidden md:flex items-center bg-slate-50 px-3 py-2 rounded-lg border border-slate-200">
                    <i class="fas fa-search text-slate-400 mr-2"></i>
                    <input type="text" placeholder="Search property/tenant..." class="bg-transparent border-none outline-none text-sm w-64">
                </div>
            </div>
            
            <div class="flex items-center gap-4">
                <button class="relative p-2 text-slate-400 hover:text-blue-600 transition">
                    <i class="fas fa-bell"></i>
                    <span class="absolute top-0 right-0 w-2 h-2 bg-red-500 rounded-full border-2 border-white"></span>
                </button>
                <div class="flex items-center gap-3 pl-4 border-l border-slate-200">
                    <div class="text-right hidden sm:block">
                        <p class="text-sm font-semibold text-slate-800 leading-none">Admin User</p>
                        <p class="text-xs text-slate-500 mt-1">Property Manager</p>
                    </div>
                    <img class="w-10 h-10 rounded-full ring-2 ring-slate-100" src="https://ui-avatars.com/api/?name=Admin+User&background=0D8ABC&color=fff" alt="User">
                </div>
            </div>
        </nav>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <!-- Card 1 -->
            <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm">
                <div class="flex items-center justify-between mb-4">
                    <div class="bg-green-100 p-3 rounded-lg">
                        <i class="fas fa-dollar-sign text-green-600 text-xl"></i>
                    </div>
                    <span class="text-green-500 text-xs font-bold">+12.5%</span>
                </div>
                <h3 class="text-slate-500 text-sm font-medium">Total Collected</h3>
                <p class="text-2xl font-bold text-slate-800">$42,500.00</p>
            </div>
            <!-- Card 2 -->
            <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm">
                <div class="flex items-center justify-between mb-4">
                    <div class="bg-blue-100 p-3 rounded-lg">
                        <i class="fas fa-key text-blue-600 text-xl"></i>
                    </div>
                    <span class="text-slate-400 text-xs">8 Available</span>
                </div>
                <h3 class="text-slate-500 text-sm font-medium">Occupied Units</h3>
                <p class="text-2xl font-bold text-slate-800">92%</p>
            </div>
            <!-- Card 3 -->
            <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm">
                <div class="flex items-center justify-between mb-4">
                    <div class="bg-purple-100 p-3 rounded-lg">
                        <i class="fas fa-user-friends text-purple-600 text-xl"></i>
                    </div>
                </div>
                <h3 class="text-slate-500 text-sm font-medium">Active Tenants</h3>
                <p class="text-2xl font-bold text-slate-800">148</p>
            </div>
            <!-- Card 4 -->
            <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm">
                <div class="flex items-center justify-between mb-4">
                    <div class="bg-orange-100 p-3 rounded-lg">
                        <i class="fas fa-exclamation-triangle text-orange-600 text-xl"></i>
                    </div>
                </div>
                <h3 class="text-slate-500 text-sm font-medium">Pending Tasks</h3>
                <p class="text-2xl font-bold text-slate-800">12</p>
            </div>
        </div>

        <!-- Main Content Area: Table & Properties -->
        <div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
            
            <!-- Recent Payments Table -->
            <div class="xl:col-span-2 bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden">
                <div class="p-6 border-b border-slate-100 flex justify-between items-center">
                    <h2 class="font-bold text-slate-800">Recent Transactions</h2>
                    <button class="text-blue-600 text-sm font-semibold hover:underline">View All</button>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50">
                                <th class="p-4 text-xs font-semibold text-slate-500 uppercase tracking-wider">Tenant</th>
                                <th class="p-4 text-xs font-semibold text-slate-500 uppercase tracking-wider">Unit</th>
                                <th class="p-4 text-xs font-semibold text-slate-500 uppercase tracking-wider">Amount</th>
                                <th class="p-4 text-xs font-semibold text-slate-500 uppercase tracking-wider">Status</th>
                                <th class="p-4 text-xs font-semibold text-slate-500 uppercase tracking-wider">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-sm">
                            <tr>
                                <td class="p-4 flex items-center gap-3 text-slate-800 font-medium">
                                    <img class="w-8 h-8 rounded-full" src="https://ui-avatars.com/api/?name=John+Doe" alt="">
                                    John Doe
                                </td>
                                <td class="p-4 text-slate-600">Apt 402</td>
                                <td class="p-4 font-bold text-slate-800">$1,200</td>
                                <td class="p-4">
                                    <span class="px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">Paid</span>
                                </td>
                                <td class="p-4 text-slate-400">
                                    <button class="hover:text-blue-600"><i class="fas fa-ellipsis-v"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-4 flex items-center gap-3 text-slate-800 font-medium">
                                    <img class="w-8 h-8 rounded-full" src="https://ui-avatars.com/api/?name=Sarah+Smith" alt="">
                                    Sarah Smith
                                </td>
                                <td class="p-4 text-slate-600">Apt 105</td>
                                <td class="p-4 font-bold text-slate-800">$850</td>
                                <td class="p-4">
                                    <span class="px-2.5 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-700">Pending</span>
                                </td>
                                <td class="p-4 text-slate-400">
                                    <button class="hover:text-blue-600"><i class="fas fa-ellipsis-v"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-4 flex items-center gap-3 text-slate-800 font-medium">
                                    <img class="w-8 h-8 rounded-full" src="https://ui-avatars.com/api/?name=Mike+Ross" alt="">
                                    Mike Ross
                                </td>
                                <td class="p-4 text-slate-600">House B-12</td>
                                <td class="p-4 font-bold text-slate-800">$2,400</td>
                                <td class="p-4">
                                    <span class="px-2.5 py-1 rounded-full text-xs font-medium bg-red-100 text-red-700">Overdue</span>
                                </td>
                                <td class="p-4 text-slate-400">
                                    <button class="hover:text-blue-600"><i class="fas fa-ellipsis-v"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Property Overview List -->
            <div class="bg-white rounded-xl border border-slate-200 shadow-sm p-6">
                <h2 class="font-bold text-slate-800 mb-6">Property Overview</h2>
                <div class="space-y-6">
                    <!-- Prop 1 -->
                    <div class="flex items-center gap-4 border-b border-slate-50 pb-4">
                        <img src="https://images.unsplash.com/photo-1570129477492-45c003edd2be?w=100&h=100&fit=crop" class="w-16 h-16 rounded-lg object-cover" alt="Home">
                        <div class="flex-1">
                            <h4 class="text-sm font-bold text-slate-800">Skyline Apartment</h4>
                            <p class="text-xs text-slate-500">12 Units • 2 Vacant</p>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-bold text-blue-600">$18,400</p>
                            <p class="text-xs text-slate-400">Monthly Revenue</p>
                        </div>
                    </div>
                    <!-- Prop 2 -->
                    <div class="flex items-center gap-4 border-b border-slate-50 pb-4">
                        <img src="https://images.unsplash.com/photo-1568605114967-8130f3a36994?w=100&h=100&fit=crop" class="w-16 h-16 rounded-lg object-cover" alt="Home">
                        <div class="flex-1">
                            <h4 class="text-sm font-bold text-slate-800">Willow Creek Villas</h4>
                            <p class="text-xs text-slate-500">5 Units • Full</p>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-bold text-blue-600">$12,000</p>
                            <p class="text-xs text-slate-400">Monthly Revenue</p>
                        </div>
                    </div>
                </div>
                <button class="w-full mt-6 py-2 border-2 border-dashed border-slate-200 text-slate-500 rounded-lg hover:border-blue-400 hover:text-blue-600 transition text-sm font-medium">
                    + Add New Property
                </button>
            </div>

        </div>
    </div>

    <!-- Script for Mobile Menu Toggle -->
    <script>
        const sidebar = document.getElementById('sidebar');
        const toggleBtn = document.getElementById('sidebarToggle');
        const backdrop = document.getElementById('sidebarBackdrop');

        function toggleSidebar() {
            sidebar.classList.toggle('-translate-x-full');
            backdrop.classList.toggle('hidden');
        }

        toggleBtn.addEventListener('click', toggleSidebar);
        backdrop.addEventListener('click', toggleSidebar);
    </script>
</body>
</html>