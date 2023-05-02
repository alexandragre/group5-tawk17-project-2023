<?php
require_once __DIR__ . "/../Template.php";

Template::header("Cocktails");
?>

<h1>Cocktails</h1>

<a href="<?= $this->home ?>/cocktails/new">Create new recipe</a>

<div class="item-grid">

    <?php foreach ($this->model as $cocktail) : ?>

        <article class="item">
            <div>
                <b><?= $cocktail->cocktail_id ?></b> <br>
                <span>Born: <?= $customer->birth_year ?></span> <br>
            </div>

            <a href="<?= $this->home ?>/customers/<?= $customer->customer_id ?>">Show</a>
            <a href="<?= $this->home ?>/customers/<?= $customer->customer_id ?>/edit">Edit</a>
        </article>

    <?php endforeach; ?>

</div>

<?php Template::footer(); ?>