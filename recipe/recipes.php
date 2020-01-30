<?php

require_once "../database.php";

require_once "Recipe.php";
require_once "RecipesRepository.php";
require_once "../ingredients/Ingredient.php";
require_once "../ingredients/IngredientRepository.php";
require_once "../recipe_ingredient/RecipeIngredientRepository.php";

$recRepo = new RecipesRepository($db);
$recipe = $recRepo->find($_GET['recipe_id']);
// $ingredRepo = new IngredientRepository($db);
// $recIngredRepo = new RecipeIngredientRepository($db);
// $array = $recIngredRepo->find($_GET['recipe_id']);
// var_dump($array);
// $ingredients = $ingredRepo->getAllIngredients($array);


if(is_null($recipe)){
    http_response_code(404);
    echo "Recipe Not Found";
    exit;
}
$ingredients = [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../potions/style3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css"/>
    <title>Recipes</title>
</head>
<body>
    <div class="displayin">
        <h2>Recipe ID:<?=$recipe->id?></h2>
        <h3>This recipe is for <?=$recipe->recipe_name?> potion</h3>
        <p><?=$recipe->instructions ?> <br>Here are the ingredients: </p>
    </div>
    <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Picture</th>
            <th>Description</th>
            <th>Quantity</th>
        </thead>
        <tbody>
            <?php foreach($ingredients as $ingredient): ?>
                <tr>
                    <td><?=$ingredient->id?></td>
                    <td><?=$ingredient->name?></td>
                    <td><?=$ingredient->picture ?></td>
                    <td><?=$ingredient->description?></td>
                    <td><?=$ingredient->quantity ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>