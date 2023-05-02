<?php
require_once __DIR__ . "/../Template.php";

Template::header("New Cocktail");
?>

<section class="share-container">
    <h1>SHARE & TEST</h1>

    <form action="/action_page.php">
        <label for="drink-text" class="drink-text">Drink name</label>
        <input type="text" id="drink-input" name="drink-input">
        <br><br>
        <label for="description" class="description-text">Drink description</label>
        <input type="text" id="description" name="description">
        <br><br>
        <label for="ingridients" class="ingridients-text">Ingridients</label>
        <input type="text" id="ingridients" name="ingridients">
        <input type="submit" class="input-create" value="Create">
      </form>

</section>

<section class="share-img-container">
<button class="share-img">Add Image</button>
</section>

<!-- From Linus 
<form action="<?= $this->home ?>/customers" method="post">
    <input type="text" name="customer_name" placeholder="Name"> <br>
    <input type="text" name="birth_year" placeholder="Birth year"> <br>
    <input type="submit" value="Save" class="btn">
</form>
-->

<?php Template::footer(); ?>