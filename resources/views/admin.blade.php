<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style-cook.css')}}">
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
                <img src="{{ asset('/images/pp.png') }}" alt="Profile" class="profile-pic">
                <div class="dropdown-content">
                    <a href="/">Logout</a>
                </div>
            </div>          
        </div>   
    </header>

    <!-- Admin Interface -->
    <div class="admin-controls">
        <a href="/recipe" class="btn btn-success fw-bold mt-5 mb-5">Add New Recipe</a>
    </div>

    <h1 class="fs-6 text-center fw-bold">Recipe List</h1>
    <div class="container d-flex">
        @foreach ($recipes as $recipe)
        <div class="card m-auto" style="width: 18rem;">
            <img src="{{ asset('images/'.$recipe->image) }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text mt-2 text-center fw-bold ">{{ $recipe->name }}</p>
                <div class="container d-flex">
                    <div class="btn-group mx-auto" role="group" aria-label="Basic mixed styles example">
                        <a href="/admin/delete/{{ $recipe->recipe_id }}" class="btn btn-danger">Delete</a>
                        <a href="/admin/edit/{{ $recipe->recipe_id }}" class="btn btn-warning">Edit</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
      <!-- The rest of your HTML -->
      

<!-- ... rest of your HTML ... -->

<!-- Hidden form for adding new recipes -->
<div id="recipeForm" style="display:none;">
    <form>
      <!-- Form fields for the recipe -->
      <label for="recipeTitle">Title</label>
      <input type="text" id="recipeTitle" name="recipeTitle" required>
      
      <!-- Include other fields for the recipe -->
  
      <button type="submit">Submit Recipe</button>
    </form>
  </div>
  

<!-- ... -->


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