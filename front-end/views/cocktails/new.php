<?php


require_once __DIR__ . "/../../Template.php";

Template::header("New Cocktail");
?>

<section class="share-container">
    <h1>SHARE & TEST</h1>


    <form action="<?= $this->home ?>/cocktails" method="POST" name="AddForm" onsubmit="return validateForm()">
    <input type="text" name="title" placeholder="Title"> <br>
    <input type="text" name="description" placeholder="Description"> <br>
    <input type="text" name="ingredients" placeholder="ingredients"> <br>
    <input type="text" name="instructions" placeholder="Instructions"> <br>
    <input type="image" name="image_url" placeholder="image_url"> <br>
    <input type="submit" value="Save" class="btn">    
    </form>
    
    <!--
    <label for="title" class="drink-text">Drink name</label>
        <input type="title" id="drink-input" name="drink-input">
        <br><br>
        <label for="description" class="description-text">Drink description</label>
        <input type="text" id="description" name="description">
        <br><br>
        <label for="ingredients" class="ingredients-text">Ingredients</label>
        <input type="text" id="ingredients" name="ingredients">
        <label for="image" class="image">image</label>
        <input type="image" id="image" name="image">
        <input type="submit" class="input-create" value="Create">
      </form> -->

</section>

<section class="share-img-container">
<button class="share-img">Add Image</button>
</section>

<?php Template::footer(); ?>