<?php
require_once __DIR__ . "/../../Template.php";

Template::header("Cocktails");
?>

             
<div class="add-container">
            <button class="add-btn"><a href="<?= $this->home ?>/cocktails/new">Create new recipe</a></button>   
</div>

<div class="landing-page">

<div class="item-grid">

    <?php foreach ($this->model as $cocktail) : ?>

        <article class="item">
            <div class="drink-card">
                
                <span>Title: <?= $cocktail->title ?></span> <br>
                <span>Description: <?= $cocktail->description ?></span> <br>
                <span>Ingredients: <?= $cocktail->ingredients ?></span> <br>
                <span>Instructions: <?= $cocktail->instructions ?></span> <br>
            
            </div>

            <div class="show-edit">
            <a href="<?= $this->home ?>/cocktails/<?= $cocktail->cocktail_id ?>" class="show-btn">Show</a>
            <a href="<?= $this->home ?>/cocktails/<?= $cocktail->cocktail_id ?>/edit" class="edit-btn">Edit</a>
            </div>
        </article>

    <?php endforeach; ?>

</div>
    </div>

<?php Template::footer(); ?>