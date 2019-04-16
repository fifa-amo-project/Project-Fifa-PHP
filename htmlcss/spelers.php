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
        <div class="spelers">
            <h3>Dit zijn de Spelers:</h3>
            <ul>
                <li>Speler, Team Speler</li>
            </ul>

            <div class="player-form">
                <h4>Voeg een Speler toe:</h4>
                <form action="action_page.php">


                    <label for="player-name"><b>Naam</b></label>
                    <input type="text" placeholder="Speler Naam" name="player-name" required>

                    <label for="team"><b>Team</b></label>
                    <input type="text" placeholder="Team Speler" name="player-team" required>

                    <button type="submit">Speler Toevoegen</button>


                </form> <!-- end of form action -->

            </div><!-- end of player-form -->
        </div><!-- end of spelers -->
    </div><!-- end of container -->
</main>


<?php

require 'footer.php';
?>
