@extends('layouts.app')

@section('content')
<div class="container my-5">

    <h2 class="fw-bold mb-4">➕ Add New Recipe</h2>

    <form action="{{ route('recipes.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label class="form-label">Recipe Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Category</label>
            <select name="category" class="form-select" required>
                <option>Italian</option>
                <option>Mexican</option>
                <option>South Indian</option>
                <option>Gujarati</option>
                <option>Dessert</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Image URL</label>
            <input type="text" name="image" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" rows="4" class="form-control" required></textarea>
        </div>

        <div class="d-flex gap-3 mt-3">
            <button type="submit" class="btn btn-success">
                Save Recipe
            </button>

            <a href="{{ route('recipes.index') }}" class="btn btn-success">
                Back to Recipes
            </a>
        </div>
    </form>
</div>
@endsection
