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
        <div class="teams">
            <h3>Dit zijn de Teams:</h3>
            <ul>
                <li>Team</li>
            </ul>

            <div class="team-form">
                <h4>Voeg een Team toe:</h4>
                <form action="action_page.php">


                    <label for="team"><b>Team</b></label>
                    <input type="text" placeholder="Team Naam" name="team-name" required>

                    <button type="submit">Team Toevoegen</button>


                </form> <!-- end of form action -->

            </div><!-- end of team-form -->
        </div><!-- end of teams -->
    </div><!-- end of container -->
</main>

<?php

require 'footer.php';
?>
