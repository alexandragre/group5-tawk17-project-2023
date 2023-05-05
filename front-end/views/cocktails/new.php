<?php


require_once __DIR__ . "/../../Template.php";

Template::header("New Cocktail");
?>

    <div class="create-new">
                <article class="heading">
                    <h1 class="big-h">CREATE A <br> NEW RECIPIE..</h1>
                </article>               
            </div>

    <form action="<?= $this->home ?>/cocktails" method="POST" name="AddForm" onsubmit="return validateForm()">
    <input class="title" type="text" name="title" placeholder="Title"> <br>
    <input class="description" type="text" name="description" placeholder="Description"> <br>
    <input class="ingredients" type="text" name="ingredients" placeholder="Ingredients"> <br>
    <input class="instructions" type="text" name="instructions" placeholder="Instructions"> <br>
    <!--<input class="image" type="image" name="image_url" placeholder="image_url"> <br>-->
    <input type="Save" value="Save" class="btn">    
    </form>
    

</section>

<section class="share-img-container">
<button class="share-img">Add Image</button>
</section>

<?php Template::footer(); ?>