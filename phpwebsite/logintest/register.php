<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 14-4-2019
 * Time: 08:55
 */



require "config.php";
require "header.php";

?>


<form action="loginController.php" method="post">
    <input type="hidden" name="type" value="register">

    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </div>

    <input type="submit" value="register">
</form>


<?php

require "footer.php";

?>



