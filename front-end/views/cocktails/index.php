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
                
                <span class="card-title"><?= $cocktail->title ?></span> <br>
                <span class="card-description"><?= $cocktail->description ?></span> <br>
            
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