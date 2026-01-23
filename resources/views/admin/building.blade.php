@extends('admin.index')

@section('title', 'Building Manage')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold">Building Manage</h1>

    {{-- Add Building Button --}}
    <a href=""
       class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700 transition">
        + Add Building
    </a>
</div>

{{-- Buildings Table --}}
<div class="bg-white shadow rounded-lg overflow-x-auto">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">SL</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Building Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Address</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Manager</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Units</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @forelse($buildings as $building)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">{{ $loop->iteration }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $building->name }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $building->address }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $building->manager ?? 'N/A' }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $building->total_units }}</td>
                <td class="px-6 py-4 whitespace-nowrap flex gap-2">
                    <a href="{{ route('buildings.edit', $building->id) }}"
                       class="text-blue-600 hover:underline">Edit</a>
                    <form action="{{ route('buildings.destroy', $building->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="px-6 py-4 text-center text-gray-500">No buildings found.</td>
            </tr>
            @endforelse
        </tbody>
        
    </table>
</div>
@endsection
