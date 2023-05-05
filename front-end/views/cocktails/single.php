<?php
require_once __DIR__ . "/../../Template.php";

Template::header($this->model->title);
?>

<h1><?= $this->model->title ?></h1>

<p>
    <b>Id: </b>
    <?= $this->model->cocktail_id ?> 
</p>

<p>
    <b>Title: </b>
    <?= $this->model->title ?> 
</p>

<p>
    <b>Description: </b>
    <?= $this->model->description ?> 
</p>

<p>
    <b>Ingredients: </b>
    <?= $this->model->ingredients ?> 
</p>

<p>
    <b>Instructions: </b>
    <?= $this->model->instructions ?> 
</p>


<?php Template::footer(); ?>