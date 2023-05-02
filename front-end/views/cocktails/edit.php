<?php
require_once __DIR__ . "/../../Template.php";

Template::header("Edit " . $this->model->title);
?>

<h1>Edit <?= $this->model->title ?></h1>

<form action="<?= $this->home ?>/cocktails/<?= $this->model->cocktail_id ?>/edit" method="post">
    <input type="text" name="title" value="<?= $this->model->title ?>" placeholder="Title"> <br>
    <input type="text" name="description" value="<?= $this->model->description ?>" placeholder="Description"> <br>
    <input type="text" name="ingridients" value="<?= $this->model->ingridients ?>" placeholder="Ingridients"> <br>
    <input type="text" name="instructions" value="<?= $this->model->instructions ?>" placeholder="Instructions"> <br>
    <input type="submit" value="Save" class="btn">
</form>

<form action="<?= $this->home ?>/cocktails/<?= $this->model->cocktail_id ?>/delete" method="post">
    <input type="submit" value="Delete" class="btn delete-btn">
</form>

<?php Template::footer(); ?>