<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style-cook.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Recipe for Your food</title>
</head>

<body>

    <header>
        <h1>CookItNow</h1> 
        <div class="search">
            <input type="text" id="searchInput" placeholder="Enter an ingredient...">
            <button id="searchButton">Search</button>
        </div>
        <div class="navigation">
            <a href="/">Home</a> 
            | 
            <a href="/about">About Us</a> 
            | 
            <div class="profile-dropdown">
                <img src="{{ asset('images/pp.png') }}" alt="Profile" class="profile-pic">
                <div class="dropdown-content">
                    <a href="/recipe">Create Recipe</a>
                    <a href="/admin">As Admin</a>
                </div>
            </div>          
        </div>   
    </header>

    <section class="mt-5">
    <h1 class="fs-6 text-center fw-bold">Recipe List</h1>
    <div class="container d-flex">
        @foreach ($recipes as $recipe)
        <div class="card m-auto" style="width: 18rem;">
            <img src="{{ asset('images/'.$recipe->image) }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text mt-2 text-center fw-bold ">{{ $recipe->name }}</p>
            </div>
        </div>
        @endforeach
    </div>
    </section>

<!-- Categories Section -->
<section id="categories">
    <h2>Categories</h2>
    <div class="categories-container"></div> <!-- Container for categories -->
</section>

<section id="category-meals">
    <!-- Container where the meals of a clicked category will be displayed -->
</section>


<div class="meal-list">
  <div class="meal-container">
    <!-- Meal items will be added here -->
  </div>
</div>

    <!-- Container when search not by categories-->
    <div id="mealList" class="meal-list"></div>
    <div class="modal-container">
        <button id="recipeCloseBtn" class="close-button">&times;</button>
        <div class="meal-details-content">
            <!-- Content from js will be inserted here -->
        </div>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>