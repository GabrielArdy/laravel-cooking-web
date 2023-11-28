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
            <form id="createRecipeForm" action="/path-to-your-server-endpoint" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="recipeTitle">Title</label>
                    <input type="text" id="recipeTitle" name="name" required>
                </div>
                <div class="form-group">
                    <label for="recipeIngredients">Ingredients</label>
                    <textarea id="recipeIngredients" name="ingridients" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="recipeInstructions">Instructions</label>
                    <textarea id="recipeInstructions" name="directions" rows="6" required></textarea>
                </div>
                <div class="form-group">
                    <label for="recipeImage">Recipe Image</label>
                    <input type="file" id="recipeImage" name="image" accept="image/*">
                </div>
                <div class="form-group">
                    <label for="recipeCategory">Category</label>
                    <select id="recipeCategory" name="recipeCategory" required>
                        <option value="">Select a Category</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->name }}">{{ Str::ucfirst($category->name) }}</option>
                        @endforeach
                        <!-- Add more categories as needed -->
                    </select>
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