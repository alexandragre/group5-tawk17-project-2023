<?php
include_once 'header.php';
?>

<section class="signup-form">
    <h2> Sign up</h2>
    <form action="signup.inc.php" method="post">
    <input type="text" name="name" placerholder="username">
    <input type="text" name="email" placerholder="email">
    <input type="text" name="pwd" placerholder="password">
    <input type="text" name="repeat-pwd" placerholder="repeat password">
    <button type="submit" name="submit">Sign up</button>
</form>
</section>


<?php
include_once 'footer.php';
?>
