@extends('admin.layout.layout')

@section('content')
<div class="min-h-screen bg-gray-50 dark:bg-neutral-900 py-10 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">

        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-neutral-800 dark:text-neutral-100">Our Journey Jagrati List</h1>
        </div>

        <!-- Table Card -->
        <div class="bg-white dark:bg-neutral-800 shadow-lg rounded-2xl overflow-hidden border border-neutral-200 dark:border-neutral-700">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-neutral-200 dark:divide-neutral-700">
                    <thead class="bg-neutral-100 dark:bg-neutral-700/50">
                        <tr>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-neutral-700 dark:text-neutral-300 uppercase tracking-wider">
                                Image
                            </th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-neutral-700 dark:text-neutral-300 uppercase tracking-wider">
                                Description
                            </th>
                            <th class="px-6 py-3 text-center text-sm font-semibold text-neutral-700 dark:text-neutral-300 uppercase tracking-wider">
                                Action
                            </th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-neutral-200 dark:divide-neutral-700">
                        @forelse ($infojagrati as $value)
                        <tr class="hover:bg-neutral-100 dark:hover:bg-neutral-700 transition-colors duration-150">
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <img src="{{ asset('assets/uploads/OurJourney/' . $value->img) }}" 
                                         alt="Journey Image"
                                         class="w-12 h-12 rounded-lg object-cover border border-neutral-300 dark:border-neutral-600">
                                </div>
                            </td>

                            <td class="px-6 py-4">
                                <p class="text-sm text-neutral-700 dark:text-neutral-300">
                                    {{ $value->description }}
                                </p>
                            </td>

                            <td class="px-6 py-4 text-center space-x-3">
                                <a href="{{ url('admin/ourjourney/jagrati/edit/' . $value->id) }}"
                                   class="inline-block bg-blue-500 hover:bg-blue-600 text-white text-sm font-medium px-4 py-1.5 rounded-full transition-all duration-200 shadow-sm">
                                    Edit
                                </a>
                                <a href="{{ url('admin/ourjourney/jagrati/destroy/' . $value->id) }}"
                                   class="inline-block bg-red-500 hover:bg-red-600 text-white text-sm font-medium px-4 py-1.5 rounded-full transition-all duration-200 shadow-sm"
                                   onclick="return confirm('Are you sure you want to delete this item?');">
                                    Delete
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="text-center py-6 text-neutral-600 dark:text-neutral-400">
                                No records found.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="p-4 border-t border-neutral-200 dark:border-neutral-700 bg-neutral-50 dark:bg-neutral-800/80">
                {{ $infojagrati->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
