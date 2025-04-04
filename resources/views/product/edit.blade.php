@extends('components.layout')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg overflow-hidden">
        <div class="px-6 py-4 bg-gray-50 border-b border-gray-200">
            <h1 class="text-xl font-bold text-gray-800">Edit Product</h1>
        </div>
        
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="p-6">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label for="Title" class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                <input type="text" 
                       name="Title" 
                       id="Title" 
                       value="{{ old('Title', $product->Title) }}" 
                       class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 @error('Title') border-red-500 @enderror" 
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
                          class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 @error('Description') border-red-500 @enderror" 
                          required>{{ old('Description', $product->Description) }}</textarea>
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
                           value="{{ old('Price', $product->Price) }}" 
                           class="w-full rounded-md border-gray-300 pl-7 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 @error('Price') border-red-500 @enderror" 
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
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 @error('Category') border-red-500 @enderror" 
                        required>
                    <option value="">Select a category</option>
                    <option value="Electronics" {{ (old('Category', $product->Category) == 'Electronics') ? 'selected' : '' }}>Electronics</option>
                    <option value="Clothing" {{ (old('Category', $product->Category) == 'Clothing') ? 'selected' : '' }}>Clothing</option>
                    <option value="Home & Kitchen" {{ (old('Category', $product->Category) == 'Home & Kitchen') ? 'selected' : '' }}>Home & Kitchen</option>
                    <option value="Books" {{ (old('Category', $product->Category) == 'Books') ? 'selected' : '' }}>Books</option>
                    <option value="Toys" {{ (old('Category', $product->Category) == 'Toys') ? 'selected' : '' }}>Toys</option>
                    <option value="Sports" {{ (old('Category', $product->Category) == 'Sports') ? 'selected' : '' }}>Sports</option>
                    <option value="Beauty" {{ (old('Category', $product->Category) == 'Beauty') ? 'selected' : '' }}>Beauty</option>
                    <option value="Other" {{ (old('Category', $product->Category) == 'Other') ? 'selected' : '' }}>Other</option>
                </select>
                @error('Category')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="Image" class="block text-sm font-medium text-gray-700 mb-1">Product Image</label>
                @if($product->Image)
                    <div class="mb-3">
                        <p class="text-sm text-gray-600 mb-2">Current image:</p>
                        <img src="{{ asset('images/' . $product->Image) }}" 
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
                            <label for="Image" class="relative cursor-pointer bg-white rounded-md font-medium text-blue-600 hover:text-blue-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500">
                                <span>Upload a new image</span>
                                <input id="Image" name="Image" type="file" class="sr-only" accept="image/*">
                            </label>
                            <p class="pl-1">or drag and drop</p>
                        </div>
                        <p class="text-xs text-gray-500">
                            PNG, JPG, GIF up to 2MB
                        </p>
                        <p class="text-xs text-gray-500 mt-1">
                            Leave empty to keep the current image
                        </p>
                    </div>
                </div>
                @error('Image')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="flex items-center justify-end space-x-3">
                <a href="{{ route('home') }}" class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Cancel
                </a>
                <button type="submit" class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Update Product
                </button>
            </div>
        </form>
    </div>
</div>
@endsection