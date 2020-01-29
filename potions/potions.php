<?php 
    require_once "../database.php";
    require_once "PotionRepository.php";
    require_once "../recipe/RecipesRepository.php";
    require_once "../recipe/Recipe.php";
    $potionRepo = new PotionRepository($db);
    $potions = $potionRepo->getAllPotion();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Potions</title>
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css"/>
</head>
<body>
    <div class="center">Potions</div>
    <div class="tabela2 col-lg-12 col-md-12 col-sm-12">
        <table>
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Picture</th>
                <th>Description</th>
                <th>Recipe</th>
                <th>Category</th>
                <th>Quantity</th>
            </thead>
            <tbody>
                <?php foreach($potions as $potion): ?>
                    <tr>
                        <td><?=$potion->id?></td>
                        <td><?=$potion->name ?></td>
                        <td><img src="<?=$potion->picture?>" width="100px" height="150px"></td>
                        <td><button id="btnDesc" class="btn btn-sm btn-success " data-toggle="modal" data-target="#exampleModalScrollable"><i class="fa fa-eye"></i>View More</button>
                            <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalScrollableTitle"><?=$potion->name?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <p><?=$potion->description?></p>
                                    </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td><a class="btn btn-sm btn-success" href="../recipe/recipes.php?recipe_id=<?=$potion->recipe ?>"><i class="fa fa-eye"></i>View More</a></td>
                        <td><span class="badge badge-pill badge-success"><?=$potion->category ?></span></td>
                        <td><span class="badge badge-pill badge-success"><?=$potion->quantity ?></span></td>        
                    </tr>
                
                <?php endforeach; ?> 
            </tbody>
        </table>
    </div>
<script> 
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')    
    });
</script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>