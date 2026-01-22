<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .recipe-card {
            height: 100%;
            border-radius: 12px;
            overflow: hidden;
        }

        .recipe-img-wrapper {
            width: 100%;
            height: 180px;   /* FIXED IMAGE HEIGHT */
            background-color: #f2f2f2;
            overflow: hidden;
        }

        .recipe-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;   /* THIS FIXES EVERYTHING */
            display: block;
        }
        
        .hero-img {
            height: 90vh;
            object-fit: cover;
            filter: brightness(60%);
        }

        .carousel-caption {
            top: 0;
            bottom: 0;
        }

        .carousel-caption h1,
        .carousel-caption p {
            text-shadow: 2px 2px 8px rgba(0,0,0,0.7);
        }
        body {
            padding-top: 60px; /* adjust according to navbar height */
        }
        .feature-card {
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-5px) scale(1.03);
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }
        /* Button animation */
        .btn-send {
            transition: all 0.3s ease;
        }

        .btn-send:hover {
            background-color: #157347;
            transform: scale(1.05);
        }

        /* Section heading */
        .contact-title {
            font-size: 2.5rem;
        }
        .recipe-box {
            position: relative;
            height: 180px;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 16px rgba(0,0,0,0.12);
        }
        .recipe-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        /* Overlay */
        .recipe-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0,0,0,0.55);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #fff;
            opacity: 0;
            transition: opacity 0.4s ease;
            text-align: center;
        }

        /* Hover effect */
        .recipe-box:hover .recipe-overlay {
            opacity: 1;
        }

        .recipe-box:hover img {
            transform: scale(1.1);
        }
        body {
            background: linear-gradient(
                180deg,
                #facf8eff 0%,
                #fdfdfcff 40%,
                #facf8eff 100%
            );
        }
        .social-icon {
            width: 45px;
            height: 45px;
            background: #1f2933;        /* dark circle */
            color: #ff8c00;             /* orange icon */
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-size: 18px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            background: #ff8c00;
            color: white;
        }
        /* Login in button in nav bar */
        .btn-light-orange {
            background-color: #FFE5CC; /* light orange */
            color: #8A4B00;
            border: none;
        }

        .btn-light-orange:hover {
            background-color: #FFD1A3;
            color: #6A3A00;
        }
    </style>
    <meta charset="UTF-8">
    <title>Recipe Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

    <!-- Header -->
    @include('layouts.header')

    <!-- Hero Section -->
    {{-- Hero Section (Home page only) --}}
    @if (request()->is('/'))
    <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#recipeCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#recipeCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#recipeCarousel" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img src="{{ asset('img/healthy.jpg') }}" class="d-block w-100 hero-img" alt="Recipe 1">
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item">
                <img src="{{ asset('img/food.jpg') }}" class="d-block w-100 hero-img" alt="Recipe 2">
            </div>
            <!-- Slide 3 -->
            <div class="carousel-item">
                <img src="{{ asset('img/fruits.jpg') }}" class="d-block w-100 hero-img" alt="Recipe 3">
            </div>
        </div>

        <!-- 🔹 PASTE PREV / NEXT BUTTONS HERE -->
        <button class="carousel-control-prev" type="button" data-bs-target="#recipeCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#recipeCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

        <!-- FIXED TEXT ON TOP -->
        <div class="carousel-caption d-flex flex-column justify-content-center">
            <h1 class="fw-bold">Welcome to NH Recipes</h1>
            <p class="lead">Delicious recipes, easy to cook, loved by everyone!</p>
        </div>

    </div>

    @endif

    <!-- MAIN CONTENT (VERY IMPORTANT) -->
    @yield('content')

    <!-- Footer -->
    @include('layouts.footer')

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Optional custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
