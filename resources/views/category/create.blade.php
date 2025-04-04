@extends("components.layout")

@section('content')

    <div class="container mx-auto px-4 py-16">    
        <div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg overflow-hidden">
            <div class="px-6 py-4 bg-gray-50 border-b border-gray-200">
                <h1 class="text-xl font-bold text-gray-800">Create Category</h1>
            </div>
            <div class="p-6">
                <form action="{{ route('category.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                        <input type="text" name="name" id="name" class="w-full p-2 border border-gray-300 rounded-lg" required> 
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Create Category
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection