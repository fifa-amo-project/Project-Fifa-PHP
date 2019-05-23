<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 16-4-2019
 * Time: 10:17
 */
require 'config.php';
require 'header.php';
?>

<main>
    <div class="container">
        <div class="login">
            <h3>Inloggen</h3>
            <form action="action_page.php">

                <div class="loginform">
                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Email Adres" name="email" required>

                    <label for="password"><b>Wachtwoord</b></label>
                    <input type="password" placeholder="Wachtwoord" name="psw" required>

                    <button type="submit">Inloggen</button>

                </div><!-- end of loginform -->

                <div class="loginform">

                    <span class="password">Forgot password? <a href="">Click here.</a></span>
                </div> <!-- end of loginform -->
            </form> <!-- end of form action -->

        </div><!-- end of login -->
    </div><!-- end of container -->
</main>

<?php

require 'footer.php';
?>
