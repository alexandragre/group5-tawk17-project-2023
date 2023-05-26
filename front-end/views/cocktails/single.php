<?php
require_once __DIR__ . "/../../Template.php";



Template::header($this->model->cocktail_id);
?>

<div class="landing-page">

<div class="overview">
<div class="cocktail-overview">

<h1 class="c-title"><?= $this->model->title ?></h1>

<p>
    <b class="cocktail-txt">Id: <?= $this->model->cocktail_id ?></b>
</p>

<p>
    <b class="cocktail-txt">Description: <?= $this->model->description ?> </b>
</p>

<p>

<b class="cocktail-txt">time<?= $YearMonthDay ?> </b>


</p>

<p>
    <b class="cocktail-txt">Ingredients: <?= $this->model->ingredients ?> </b>
</p>

<p>
    <b class="cocktail-txt">Instructions: <?= $this->model->instructions ?> </b>
</p>
</div>

<div class="img-overview">

<img src="img/drinks/<?= $this->model->image_url?>" alt="" height="100" width="100">
</div>

<?php if ($this->user->user_setting === "admin") : ?>

<p>
    <b>User ID: </b>
    <?= $this->model->user_id ?>
</p>

<?php endif; ?>

</div>

</div>

<?php Template::footer(); ?>