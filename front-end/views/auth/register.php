<?php
require_once __DIR__ . "/../../Template.php";

Template::header("Register user", $this->model["error"]);
?>

<div class="center-container">
<h1>Register user</h1>

<form action="<?= $this->home ?>/auth/register" method="post">
    <input class="field" type="text" name="username" placeholder="Username"> <br>
    <input class="field" type="password" name="password" placeholder="Password"> <br>
    <input class="field" type="password" name="confirm_password" placeholder="Confirm password"> <br>
    <input class="save" type="submit" value="Save" class="btn">
</form>
</div>

<?php Template::footer(); ?>