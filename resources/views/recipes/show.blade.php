@extends('layouts.app')

@section('content')
<div class="container my-5">

    <h1 class="fw-bold">{{ $recipe->title }}</h1>
    <p class="text-muted">Category: {{ $recipe->category }}</p>

    <!-- IMAGE (STATIC FROM public/img USING TITLE) -->
    <div class="recipe-img-wrapper mb-4">
        <img src="{{ asset('img/' . $recipe->title . '.jpg') }}"
             alt="{{ $recipe->title }}"
             onerror="this.src='{{ asset('img/default.jpg') }}'">
    </div>

    <h3>Ingredients 🍴</h3>
    <ul>
        @foreach(explode(',', $recipe->ingredients) as $ingredient)
            <li>{{ trim($ingredient) }}</li>
        @endforeach
    </ul>

    <h3>Steps 👩‍🍳</h3>
    <ol>
        @foreach(explode('.', $recipe->steps) as $step)
            @if(trim($step) != '')
                <li>{{ trim($step) }}.</li>
            @endif
        @endforeach
    </ol>

    <a href="{{ route('recipes.index') }}" class="btn btn-primary mt-4">
        ⬅ Back to Recipes
    </a>

</div>

<style>
.recipe-img-wrapper {
    width: 100%;
    max-width: 500px;
    height: 260px;
    background: #f5f5f5;
    overflow: hidden;
    border-radius: 12px;
}

.recipe-img-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
</style>
@endsection
