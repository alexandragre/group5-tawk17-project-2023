<?php


require_once __DIR__ . "/../../Template.php";

Template::header("New Cocktail");
?>

<div class="create-new">                    
            
      <div class="form-left">
        <h1 class="big-h">CREATE A <br> NEW RECIPE..</h1>
        <form action="<?= $this->home ?>/cocktails" method="POST" name="AddForm" onsubmit="return validateForm()">
        <input class="title" type="text" name="title" placeholder="Title"> <br>
        <input class="description" type="text" name="description" placeholder="Description"> <br>
        <input class="ingredients" type="text" name="ingredients" placeholder="Ingredients"> <br>
      </div>

      <div class="form-right">
        <input class="instructions" type="text" name="instructions" placeholder="Instructions"> <br>
        <!--<input class="image" type="file" id="img" name="image_url" accept="image/*"> <br>!-->

      <form action="<?= $this->home ?>/cocktails/drink_image" method="post" enctype="multipart/form-data">
    <input class="image" type="file" name="drink_image"> <br>
    <input type="submit" value="Save" class="btn">
        <input type="submit" value="Save" class="btn">    
        </form>
      </div>

</div>

<?php Template::footer(); ?>