<?php
require_once __DIR__ . "/../../Template.php";

Template::header("Login", $this->model["error"]);
?>

<div class="center-container">
<h1 class="cocktail-h">Login</h1>

<form action="<?= $this->home ?>/auth/login" method="post">
    <input class="field" type="text" name="username" placeholder="Username"> <br>
    <input class="field" type="password" name="password" placeholder="Password"> <br>
    <input class="save" type="submit" value="Log in" class="btn">
</form>

<p>
    Not registered? 
    <a href="<?= $this->home ?>/auth/register">Register user</a>
</p>
</div>

<?php Template::footer(); ?>