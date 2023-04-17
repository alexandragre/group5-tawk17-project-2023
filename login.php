<?php
include_once 'header.php';
?>

<section class="login-form">
    <h2 class="login-h">Login</h2>
    <form action="login.inc.php" method="post">
    <input type="text" name="name" placerholder="username">
    <input type="text" name="pwd" placerholder="password">
    <button type="submit" name="submit">Login</button>
</form>
</section>


<?php
include_once 'footer.php';
?>
