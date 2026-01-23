@extends('admin.index')

@section('title', 'Dashboard')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Welcome to Dashboard</h1>

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
@endsection
