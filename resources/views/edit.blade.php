<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style-cook.css') }}">
    <title>Create Recipe</title>
</head>
<body>
    <header>
        <!-- Your existing header goes here -->
    </header>

    <main>
        <div class="create-recipe-container">
            <h1>Create Recipe</h1>
            <form id="createRecipeForm" action="{{url('/admin/update/')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="recipe_id" value="{{$recipe->recipe_id}}">
                <div class="form-group">
                    <label for="recipeTitle">Title</label>
                    <input type="text" id="recipeTitle" name="name" value="{{$recipe->name}}" required>
                </div>
                <div class="form-group">
                    <label for="recipeIngredients">Ingredients</label>
                    <textarea id="recipeIngredients" name="ingredients" rows="4" required>{{$recipe->ingredients}}</textarea>
                </div>
                <div class="form-group">
                    <label for="recipeInstructions">Instructions</label>
                    <textarea id="recipeInstructions" name="directions" rows="6" required>{{$recipe->directions}}</textarea>
                </div>
                <div class="form-group">
                    <label for="recipeImage">Recipe Image</label>
                    <input type="file" id="recipeImage" name="image" accept="image/*">
                </div>
                <div class="form-group">
                    <label for="recipeCategory">Category</label>
                    <input type="text" name="category" id="" value="{{$recipe->category}}">
                </div>
                <button type="submit">Submit Recipe</button>
            </form>
        </div>
    </main>

    <footer>
        <!-- Your existing footer goes here -->
    </footer>

    <script src="js/script.js"></script>
</body>
</html>