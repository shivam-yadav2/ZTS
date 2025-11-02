@extends('admin.layout.layout')
@section('content')

<div class="w-full px-6 py-8">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-semibold text-gray-100">Member Card List</h2>
        <a href="{{ url('admin/teamcard/show-form') }}" 
           class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-4 py-2 rounded-lg shadow transition">
            + Add Member
        </a>
    </div>

    <!-- Card Container -->
    <div class="bg-gray-900 border border-gray-700 rounded-2xl shadow-xl overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full border-separate border-spacing-0">
                <thead>
                    <tr class="bg-white text-neutral-700 uppercase text-sm tracking-wide">
                        <th class="px-6 py-4 text-left">Name</th>
                        <th class="px-6 py-4 text-left">Description</th>
                        <th class="px-6 py-4 text-left">Type</th>
                        <th class="px-6 py-4 text-left">Image</th>
                        <th class="px-6 py-4 text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-700">
                    @forelse ($data as $value)
                    <tr class="hover:bg-gray-800 transition-all duration-200">
                        <!-- Name -->
                        <td class="px-6 py-4 text-gray-100 font-medium">{{ $value->name }}</td>

                        <!-- Description -->
                        <td class="px-6 py-4 text-gray-300">{{ $value->description }}</td>

                        <!-- Type -->
                        <td class="px-6 py-4 text-gray-400">{{ $value->type }}</td>

                        <!-- Image -->
                        <td class="px-6 py-4">
                            <img src="{{ asset('assets/uploads/teamcard/'.$value->img) }}" 
                                 alt="Image" 
                                 class="w-12 h-8 object-cover rounded-lg border border-gray-600 shadow-sm">
                        </td>

                        <!-- Actions -->
                        <td class="px-6 py-4 text-center">
                            <div class="flex justify-center items-center gap-3">
                                <!-- Edit -->
                                <a href="{{ url('admin/teamcard/edit/'.$value->id) }}" 
                                   class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-blue-600 hover:bg-blue-700 text-white transition">
                                    <i class="fa-solid fa-pen-to-square text-sm"></i>
                                </a>
                                <!-- Delete -->
                                <a href="{{ url('admin/teamcard/destroy/'.$value->id) }}" 
                                   onclick="return confirm('Are you sure you want to delete this member?')" 
                                   class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-red-600 hover:bg-red-700 text-white transition">
                                    <i class="fa-solid fa-trash text-sm"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-6 py-8 text-center text-gray-400">
                            No team members found. <a href="{{ url('admin/teamcard/teamcardForm') }}" class="text-blue-500 hover:underline">Add one now</a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        @if($data->hasPages())
        <div class=" border-t border-gray-700 px-6 py-4 bg-gray-900">
            <div class="flex justify-center">
                {{ $data->links('pagination::tailwind') }}
            </div>
        </div>
        @endif
    </div>
</div>

@endsection
