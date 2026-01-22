<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-dark" style="background-color: #FF8C00; font-size: 18px;">
    <div class="container">
        <a class="navbar-brand fs-3" href="{{ url('/') }}"><b>🍲 NH Recipes</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/recipes') }}">Recipes</a></li>
                <li class="nav-item"><a class="nav-link me-4" href="{{ url('/contact') }}">Contact</a></li> 
                <li class="nav-item"><a href="/login" class="btn fw-bold px-4 py-2 rounded-pill" ><i class="fas fa-right-to-bracket m-2"></i> Login</a></li>
            </ul>
        </div>
    </div>
</nav>