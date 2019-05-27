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
            <h3>Inloggen</h3>
            <form action="loginController.php" method="post">

               
                    <input type="hidden" name="type" value="login">
                    <div class="form-group">
                        <label for="email" ><b>Email</b></label>
                        <input type="email" placeholder="Email Adres" name="email" id="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="password"><b>Wachtwoord</b></label>
                        <input type="password" placeholder="Wachtwoord" name="password" id="password" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="inloggen">
                    </div>
                    

                

                <div class="form-group">

                    <span class="password">Wachtwoord vergeten? <a href="">Klik hier.</a></span>
                </div> <!-- end of loginform -->
            </form> <!-- end of form action -->

        </div><!-- end of login -->
    </div><!-- end of container -->
</main>

<?php

require 'footer.php';
?>
