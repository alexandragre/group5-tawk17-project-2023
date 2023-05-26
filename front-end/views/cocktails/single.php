<?php
require_once __DIR__ . "/../../Template.php";



Template::header($this->model['cocktail']->cocktail_id);
?>

<div class="landing-page">

<div class="overview">
<div class="cocktail-overview">

<h1 class="c-title"><?= $this->model['cocktail']->title ?></h1>

<p>
    <b class="cocktail-txt">Id: <?= $this->model['cocktail']->cocktail_id ?></b>
</p>

<p>
    <b class="cocktail-txt">Description: <?= $this->model['cocktail']->description ?> </b>
</p>

<p>

<b class="cocktail-txt">Day<?= $this->model['day'] ?> </b>


</p>

<p>
    <b class="cocktail-txt">Ingredients: <?= $this->model['cocktail']->ingredients ?> </b>
</p>

<p>
    <b class="cocktail-txt">Instructions: <?= $this->model['cocktail']->instructions ?> </b>
</p>
</div>

<div class="img-overview">

<img src="img/drinks/<?= $this->model['cocktail']->image_url?>" alt="" height="100" width="100">
</div>

<?php if ($this->user->user_setting === "admin") : ?>

<p>
    <b>User ID: </b>
    <?= $this->model['cocktail']->user_id ?>
</p>

<?php endif; ?>

</div>

</div>

<?php Template::footer(); ?>