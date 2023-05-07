<?php
require_once __DIR__ . "/../../Template.php";

Template::header("Cocktails");
?>

<div class="landing-page">
             
<article class="search-container">
            <button class="add-btn"><a href="<?= $this->home ?>/cocktails/new">Create new recipe</a></button>   
</article>

<div class="item-grid">

    <?php foreach ($this->model as $cocktail) : ?>

        <article class="item">
            <div>
                
                <span>Title: <?= $cocktail->title ?></span> <br>
                <span>Description: <?= $cocktail->description ?></span> <br>
                <span>Ingredients: <?= $cocktail->ingredients ?></span> <br>
                <span>Instructions: <?= $cocktail->instructions ?></span> <br>
            
            </div>

            <div class="show-edit">
            <a href="<?= $this->home ?>/cocktails/<?= $cocktail->cocktail_id ?>">Show</a>
            <a href="<?= $this->home ?>/cocktails/<?= $cocktail->cocktail_id ?>/edit">Edit</a>
            </div>
        </article>

    <?php endforeach; ?>

</div>
    </div>

<?php Template::footer(); ?>