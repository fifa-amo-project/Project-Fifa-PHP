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
        <div class="poules">
            <h3>Dit zijn de Poules:</h3>
            <ul>
                <li>Poule</li>
            </ul>

            <div class="poule-form">
                <h4>Voeg een Poule toe:</h4>
                <form action="action_page.php">


                    <label for="poule"><b>Poule</b></label>
                    <input type="text" placeholder="Poule Naam" name="poule-name" required>

                    <button type="submit">Poule Toevoegen</button>


                </form> <!-- end of form action -->

            </div><!-- end of team-form -->
        </div><!-- end of teams -->
    </div><!-- end of container -->
</main>


<?php

require 'footer.php';
?>
