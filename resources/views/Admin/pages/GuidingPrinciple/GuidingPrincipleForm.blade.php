@extends('admin.layout.layout')
@section('content')

<div class="grid grid-cols-12 gap-6">
    <div class="md:col-span-6 col-span-12">

        <!-- Error Messages -->
        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-lg">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ url('admin/guidingprinciple/store') }}" method="post" enctype="multipart/form-data" class="space-y-6"> 
            @csrf
            <div class="bg-white dark:bg-neutral-800 shadow-lg rounded-2xl overflow-hidden">
                <!-- Card Header -->
                <div class="border-b border-neutral-200 dark:border-neutral-700 px-6 py-4">
                    <h2 class="text-xl font-bold text-neutral-900 dark:text-neutral-100">Add Guiding Principle</h2>
                </div>

                <!-- Card Body -->
                <div class="p-6 grid grid-cols-12 gap-4">
                    <!-- Heading -->
                    <div class="col-span-12">
                        <label class="block text-sm font-medium text-neutral-700 dark:text-neutral-300 mb-2">Heading</label>
                        <input type="text" name="heading"
                            class="w-full rounded-lg border border-neutral-300 dark:border-neutral-600 bg-white dark:bg-neutral-700 text-neutral-800 dark:text-neutral-200 p-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Enter heading">
                    </div>

                    <!-- Description -->
                    <div class="col-span-12">
                        <label class="block text-sm font-medium text-neutral-700 dark:text-neutral-300 mb-2">Description</label>
                        <input type="text" name="description"
                            class="w-full rounded-lg border border-neutral-300 dark:border-neutral-600 bg-white dark:bg-neutral-700 text-neutral-800 dark:text-neutral-200 p-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Enter description">
                    </div>

                    <!-- Image Upload -->
                    <div class="col-span-12">
                        <label class="block text-sm font-medium text-neutral-700 dark:text-neutral-300 mb-2">Image</label>
                        <input type="file" name="icon"
                            class="w-full rounded-lg border border-neutral-300 dark:border-neutral-600 text-neutral-800 dark:text-neutral-200 p-2 cursor-pointer bg-white dark:bg-neutral-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Submit Button -->
                    <div class="col-span-12 flex justify-end">
                        <button type="submit"
                            class="bg-primary-100 text-primary-600 hover:bg-primary-700 hover:text-white rounded-full px-6 py-3 font-semibold transition-all duration-200 shadow hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-primary-500">
                            Add
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
