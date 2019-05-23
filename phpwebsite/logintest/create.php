<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 1-4-2019
 * Time: 09:51
 */

require 'header.php';
require "config.php";
?>
    <h1>Create new recipe</h1>
    <form action="userController.php" method="post">
        <input type="hidden" name="type" value="create">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="username" id="username" name="username" required>

        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>

        <input type="submit" id='create_button' value="Create new user">
    </form>



<?php
// method altijd post anders alle info komt op url //niet veilig
// action welke script zorg er voor dat het word verstuurd
require 'footer.php'
?>