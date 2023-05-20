<?php
require_once __DIR__ . "/../../Template.php";

Template::header("Edit " . $this->model->title);
?>

               
<div class="create-new">                    
            
      <div class="form-left">
      <h1 class="big-h">EDIT RECIPE</h1>
      <form action="<?= $this->home ?>/cocktails/<?= $this->model->cocktail_id ?>/edit" method="post">
        <input class="title" type="text" name="title" value="<?= $this->model->title ?>"placeholder="Title"> <br>
        <input class="description" type="text" name="description" value="<?= $this->model->description ?>"placeholder="Description"> <br>
        <input class="ingredients" type="text" name="ingredients" value="<?= $this->model->ingredients ?>"placeholder="Ingredients"> <br>
      </div>

      <div class="form-right">
      <input class="instructions" type="text" name="instructions" value="<?= $this->model->instructions ?>" placeholder="Instructions"> <br>
    <input class="image" type="file" id="img" name="image_url" accept="image/*"value="<?= $this->model->image_url ?>" placeholder="image"> <br>
   
        
    <input type="number" name="user_id" value="<?= $this->model->user_id ?>" placeholder="User ID"> <br>
    <input type="submit" value="Save" class="save-btn">  
  </form>

  <form action="<?= $this->home ?>/cocktails/drink_image" method="post" enctype="multipart/form-data">
    <input class="image" type="file" name="drink_image"> <br>
    <input type="submit" value="Save" class="btn">
        </form>

    <form action="<?= $this->home ?>/cocktails/<?= $this->model->cocktail_id ?>/delete" method="post">
    <input type="submit" value="Delete" class="delete-btn">

        </form>
      </div>

</div>


<?php Template::footer(); ?>