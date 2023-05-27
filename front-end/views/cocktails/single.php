<?php
require_once __DIR__ . "/../../Template.php";



Template::header($this->model['cocktail']->cocktail_id);
?>

<div class="landing-page">

<div class="overview">
<div class="cocktail-overview-one">

<h1 class="c-title"><?= $this->model['cocktail']->title ?></h1>

<p>
    <b class="cocktail-txt">Id: <?= $this->model['cocktail']->cocktail_id ?></b>
</p>

<p>
    <b class="cocktail-txt">Description: <?= $this->model['cocktail']->description ?> </b>
</p>

<p>

<b class="cocktail-txt">Day of the year: <?= $this->model['day'] ?> </b>


</p>

<p>
    <b class="cocktail-txt">Ingredients: <?= $this->model['cocktail']->ingredients ?> </b>
</p>

<p>
    <b class="cocktail-txt">Instructions: <?= $this->model['cocktail']->instructions ?> </b>
</p>
</div>

<?php if ($this->user->user_setting === "admin") : ?>


<?php endif; ?>

</div>

</div>

<?php Template::footer(); ?>