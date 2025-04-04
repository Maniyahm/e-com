@extends('components.layout')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6">{{ isset($product) ? 'Edit Product' : 'Add New Product' }}</h1>
        
        <form action="{{ isset($product) ? route('products.update', $product->id) : route('products.store') }}" 
              method="POST" 
              enctype="multipart/form-data">
            @csrf
            @if(isset($product))
                @method('PUT')
            @endif
            
            <div class="mb-4">
                <label for="Title" class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                <input type="text" 
                       name="Title" 
                       id="Title" 
                       value="{{ isset($product) ? $product->Title : old('Title') }}" 
                       class="w-full rounded-md border-gray-300 shadow-sm px-4 py-2 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 @error('Title') border-red-500 @enderror" 
                       required>
                @error('Title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-4">
                <label for="Description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                <textarea name="Description" 
                          id="Description" 
                          rows="4" 
                          class="w-full rounded-md border-gray-300 shadow-sm px-4 py-2 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 @error('Description') border-red-500 @enderror" 
                          required>{{ isset($product) ? $product->Description : old('Description') }}</textarea>
                @error('Description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-4">
                <label for="Price" class="block text-sm font-medium text-gray-700 mb-1">Price</label>
                <div class="relative rounded-md shadow-sm">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                        <span class="text-gray-500 sm:text-sm">$</span>
                    </div>
                    <input type="number" 
                           name="Price" 
                           id="Price" 
                           step="0.01" 
                           min="0" 
                           value="{{ isset($product) ? $product->Price : old('Price') }}" 
                           class="w-full rounded-md border-gray-300 pl-7 shadow-sm px-4 py-2 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 @error('Price') border-red-500 @enderror" 
                           required>
                </div>
                @error('Price')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-4">
                <label for="Category" class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                <select name="Category" 
                        id="Category" 
                        class="w-full rounded-md border-gray-300 shadow-sm px-4 py-2 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 @error('Category') border-red-500 @enderror" 
                        required>
                    <option value="">Select a category</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->name }}" {{ (isset($product) && $product->Category == $category->name) || old('Category') == $category->name ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
                </select>
                @error('Category')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="Image" class="block text-sm font-medium text-gray-700 mb-1">Product Image</label>
                @if(isset($product) && $product->Image)
                    <div class="mb-3">
                        <p class="text-sm text-gray-600 mb-2">Current image:</p>
                        <img src="{{ asset('storage/' . $product->Image) }}" 
                             alt="{{ $product->Title }}" 
                             class="h-32 w-auto object-cover rounded-md">
                    </div>
                @endif
                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                    <div class="space-y-1 text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="flex text-sm text-gray-600">
                            <label for="Image" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                <span>Upload a file</span>
                                <input id="Image" name="Image" type="file" class="sr-only" accept="image/*">
                            </label>
                            <p class="pl-1">or drag and drop</p>
                        </div>
                        <p class="text-xs text-gray-500">
                            PNG, JPG, GIF up to 2MB
                        </p>
                    </div>
                </div>
                @error('Image')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="flex items-center justify-end space-x-3">
                <a href="{{ route('home') }}" class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Cancel
                </a>
                <button type="submit" class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ isset($product) ? 'Update Product' : 'Create Product' }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection