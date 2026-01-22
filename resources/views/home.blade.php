@extends('layouts.app')

@section('content')

<!-- ABOUT US -->
<section class="py-5 soft-gradient-full">
    <div class="container text-center">
        <h2 class="fw-bold mb-3 text-warning">🍲 About NH Recipes</h2>
        <p class="text-muted mb-4">
            Cooking made simple, tasty, and enjoyable
        </p>

        <p class="text-muted mx-auto" style="max-width: 850px;">
            <strong>NH Recipes</strong> is a simple and user-friendly recipe website created to help
            food lovers discover delicious and easy-to-make recipes from different cuisines.
            Whether you are a beginner or an experienced cook, our goal is to inspire you
            to cook healthy, tasty, and homemade meals with confidence.
        </p>
    </div>
</section>

<!-- WHY PEOPLE LOVE -->
<section class="py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-3 text-warning">Why People Love NH Recipes ❤️</h2>
        <p class="text-muted mx-auto" style="max-width: 800px;">
            From traditional favorites to modern delights, we make cooking simple and delicious for everyone.
        </p>

        <div class="row justify-content-center mt-4 g-4">

            <div class="col-md-3">
                <div class="p-4 border rounded shadow-sm h-100">
                    <div class="fs-1 mb-2">🍳</div>
                    <h5 class="fw-bold">Easy to Cook</h5>
                    <p class="text-muted small">
                        Step-by-step instructions so anyone can cook confidently.
                    </p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="p-4 border rounded shadow-sm h-100">
                    <div class="fs-1 mb-2">🥗</div>
                    <h5 class="fw-bold">Fresh Ingredients</h5>
                    <p class="text-muted small">
                        Recipes made with fresh, healthy, and quality ingredients.
                    </p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="p-4 border rounded shadow-sm h-100">
                    <div class="fs-1 mb-2">❤️</div>
                    <h5 class="fw-bold">Loved by All</h5>
                    <p class="text-muted small">
                        Trusted and enjoyed by food lovers everywhere.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- POPULAR RECIPES -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="fw-bold text-warning">🔥 Popular Recipes</h2>
            <p class="text-muted">Most loved dishes on NH Recipes</p>
        </div>

        <div class="row g-4">

            <div class="col-md-3">
                <div class="recipe-box">
                    <img src="img/pasta1.jpg" alt="Pasta">
                    <div class="recipe-overlay">
                        <h6>Pasta</h6>
                        <div class="text-warning">★★★★☆</div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="recipe-box">
                    <img src="img/hot pot rice.jpg" alt="Hot Pot Rice">
                    <div class="recipe-overlay">
                        <h6>Hot Pot Rice</h6>
                        <div class="text-warning">★★★★★</div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="recipe-box">
                    <img src="img/khandvi1.jpeg" alt="Khandvi">
                    <div class="recipe-overlay">
                        <h6>Khandvi</h6>
                        <div class="text-warning">★★★★☆</div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="recipe-box">
                    <img src="img/brownie1.jpeg" alt="Brownie">
                    <div class="recipe-overlay">
                        <h6>Brownie</h6>
                        <div class="text-warning">★★★★★</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- OUR CHEF -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-5 text-warning">👨‍🍳 Our Chefs</h2>

        <!-- Chef 1 -->
        <div class="row align-items-center justify-content-center mb-5">
            <div class="col-md-4 text-center">
                <img src="img/hasti2.jpg" class="img-fluid rounded-circle shadow"
                     style="width:220px;height:220px;object-fit:cover;">
            </div>
            <div class="col-md-6">
                <h4 class="fw-bold">Chef Hasti Trambadiya</h4>
                <p class="text-muted mb-1">🍽 Experience: 12+ Years</p>
                <p class="text-muted mb-1">⭐ Speciality: Italian & Continental</p>
                <p>
                    Passionate about creating delicious recipes using fresh ingredients,
                    known for simple and healthy dishes loved by everyone.
                </p>
            </div>
        </div>

        <!-- Chef 2 -->
        <div class="row align-items-center justify-content-center">
            <div class="col-md-4 text-center">
                <img src="img/nandu.jpeg" class="img-fluid rounded-circle shadow"
                     style="width:220px;height:220px;object-fit:cover;">
            </div>
            <div class="col-md-6">
                <h4 class="fw-bold">Chef Nandni Korat</h4>
                <p class="text-muted mb-1">🍽 Experience: 12+ Years</p>
                <p class="text-muted mb-1">⭐ Speciality: Indian & Healthy Meals</p>
                <p>
                    Known for creating nutritious Indian recipes with a modern twist,
                    focusing on taste and wellness.
                </p>
            </div>
        </div>

    </div>
</section>

@endsection
