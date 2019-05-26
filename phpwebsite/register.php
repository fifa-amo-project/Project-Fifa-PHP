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
                <input type="hidden" name="type" value="register">
                    <div class="form-group">
                         <label for="email"><b>Email</b></label>
                        <input type="email" placeholder="Email Adres" name="email" required>
                    </div>
                   
                    <div class="form-group">
                        <label for="password"><b>Wachtwoord</b></label>
                        <input type="password" placeholder="Wachtwoord" name="password" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Registreren">
                    </div>
                    
            </form> <!-- end of form action -->

        </div><!-- end of login -->
    </div><!-- end of container -->

</main>

<?php

require 'footer.php';
?>
