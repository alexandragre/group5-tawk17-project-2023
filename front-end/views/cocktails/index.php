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
                <b><?= $cocktail->cocktail_id ?></b> <br>
                <span>Title <?= $cocktail->title ?></span> <br>
                <span>Description <?= $cocktail->description ?></span> <br>
                <span>Ingredients <?= $cocktail->ingredients ?></span> <br>
                <span>Instructions <?= $cocktail->instructions ?></span> <br>
                <span>Add image <?= $cocktail->image_url ?></span> <br>
            </div>

            <a href="<?= $this->home ?>/cocktails/<?= $cocktail->cocktail_id ?>">Show</a>
            <a href="<?= $this->home ?>/cocktails/<?= $cocktail->cocktail_id ?>/edit">Edit</a>
        </article>

    <?php endforeach; ?>

</div>
    </div>

<?php Template::footer(); ?>