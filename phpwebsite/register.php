<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 16-4-2019
 * Time: 10:17
 */

require 'header.php';
?>


<main>

    <div class="container">
        <div class="login">

            <h3>Registreren</h3>

            <form action="loginController.php" method="post">

                <div class="loginform">
                    <input type="hidden" name="type" value="register">
                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Email Adres" name="email" required>

                    <label for="password"><b>Wachtwoord</b></label>
                    <input type="password" placeholder="Wachtwoord" name="password" required>

                    <button type="submit">Registreren</button>

                </div><!-- end of loginform -->

            </form> <!-- end of form action -->

        </div><!-- end of login -->
    </div><!-- end of container -->

</main>

<?php

require 'footer.php';
?>
