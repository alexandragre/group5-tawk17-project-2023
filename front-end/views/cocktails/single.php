<?php
require_once __DIR__ . "/../../Template.php";


Template::header($this->model->cocktail_id);
?>

<div class="landing-page">

<div class="overview">
<div class="cocktail-overview">

<h1 class="c-title"><?= $this->model->cocktail_id ?></h1>

<p>
    <b class="cocktail-txt">Id: <?= $this->model->cocktail_id ?></b>
</p>

<p>
    <b class="cocktail-txt">Title: <?= $this->model->title ?> </b>
</p>

<p>
<b class="cocktail-txt">Title: <?= $this->model->currentDate ?> </b> <!-- Ändra --> 
</p>

<p>
    <b class="cocktail-txt">Description: <?= $this->model->description ?> </b>
</p>

<p>
    <b class="cocktail-txt">Ingredients: <?= $this->model->ingredients ?> </b>
</p>

<p>
    <b class="cocktail-txt">Instructions: <?= $this->model->instructions ?> </b>
</p>
</div>

<div class="img-overview">
<p>
<b><?= $this->body->image_url ?> </b>
</p>

<?php if ($this->user->user_setting === "admin") : ?>

<p>
    <b>User ID: </b>
    <?= $this->model->user_id ?>
</p>

<?php endif; ?>
</div>
</div>

</div>

<?php Template::footer(); ?>