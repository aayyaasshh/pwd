<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Details</title>
    <link href="{{ asset('css/read-more.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
    <header class="header">
        <h2>Recipe Details</h2>
    </header>
    
    <main class="main">
        <section class="recipe-details">
            <div class="recipe-header">
                <img src="path/to/dish.jpg" alt="Dish" class="recipe-image">
                <h3>Resep Nasi Goreng Rumahan</h3>
            </div>
            
            <div class="recipe-info">
                <h4>Ingredients:</h4>
                <ul>
                    <li>2 cups of rice</li>
                    <li>2 tablespoons of soy sauce</li>
                    <li>1 clove of garlic, minced</li>
                    <li>2 eggs, beaten</li>
                    <li>1/2 cup of mixed vegetables</li>
                    <li>Salt and pepper to taste</li>
                </ul>
                
                <h4>Instructions:</h4>
                <ol>
                    <li>Heat oil in a pan and sauté the garlic until fragrant.</li>
                    <li>Add the mixed vegetables and cook until tender.</li>
                    <li>Push the vegetables to one side of the pan and pour in the beaten eggs. Scramble until cooked.</li>
                    <li>Add the rice and soy sauce, stirring until everything is well mixed.</li>
                    <li>Season with salt and pepper, then serve hot.</li>
                </ol>
            </div>
            
            <div class="recipe-footer">
                <a href="{{ url()->previous() }}" class="btn-back"><i class="bx bxs-left-arrow-circle"></i> Back</a>
            </div>
        </section>
    </main>
    
    <!-- <footer class="footer">
        <p>&copy; 2024 The Kitchen. All rights reserved.</p>
    </footer> -->
</body>
</html>
