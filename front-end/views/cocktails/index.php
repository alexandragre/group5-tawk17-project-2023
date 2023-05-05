<?php
require_once __DIR__ . "/../../Template.php";

Template::header("Cocktails");
?>

<h1>Cocktails</h1>


<div class="landing-page">
                <article class="heading">
                    <h1 class="big-h">DRINKS & <br> COCKTAILS</h1>
                </article>

                
<a href="<?= $this->home ?>/cocktails/new">Create new recipe</a>

<div class="item-grid">


<article class="search-container">
                <button class="add-btn"><a href="<?= $this->home ?>/cocktails/new">Add</a></button>   
             <p class="intro-text">With an extensive database of drink recipes, Sipper is the ultimate location for cocktail enthusiasts and those looking to up their drink game. </p>
    </article>

    
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

<?php Template::footer(); ?>