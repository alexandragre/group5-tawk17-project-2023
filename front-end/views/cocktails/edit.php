<?php
require_once __DIR__ . "/../../Template.php";

Template::header("Edit " . $this->model->title);
?>

<div class="create-new">    
               

<form action="<?= $this->home ?>/cocktails/<?= $this->model->cocktail_id ?>/edit" method="post">
<div class="form-left">
    <h1 class="big-h">EDIT RECIPE</h1>
    <input class="title" type="text" name="title" value="<?= $this->model->title ?>" placeholder="Title"> <br>
    <input class="description" type="text" name="description" value="<?= $this->model->description ?>" placeholder="Description"> <br>
</div>
    
<div class="form-right">
    <input class="ingredients" type="text" name="ingredients" value="<?= $this->model->ingredients ?>" placeholder="Ingridients"> <br>
    <input class="instructions" type="text" name="instructions" value="<?= $this->model->instructions ?>" placeholder="Instructions"> <br>
    <input class="image" type="file" id="img" name="image_url" accept="image/*"value="<?= $this->model->image_url ?>" placeholder="image"> <br>
    
    <input type="submit" value="Save" class="save-btn">
    <input type="submit" value="Delete" class="delete-btn">
    </form>
    </div>
</div> 


<?php Template::footer(); ?>