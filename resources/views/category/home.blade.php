{{-- resources/views/category/home.blade.php --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            {{-- Include the categories component --}}
            @include('components.categories')
        </div>
        <div class="col-md-9">
            <h1>All Categories</h1>
            
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $category->name }}</h5>
                                <a href="{{ url('category/' . $category->slug) }}" class="btn btn-primary">View Category</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection