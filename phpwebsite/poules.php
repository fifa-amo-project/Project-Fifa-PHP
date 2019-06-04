<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 16-4-2019
 * Time: 10:17
 */
require 'header.php';
$sql = "SELECT * FROM teams"; //gewoon een opslag van een string die je later gaat gebruiken
$query = $db->query($sql); //verzoek naar de database, voer sql van hierboven uit
$teams = $query->fetchAll(PDO::FETCH_ASSOC); //multie demensionale array //alles binnenhalen
if(!isset($_SESSION['id'])){
    header('Location: redirect.php');
    exit;
}

if(!isset($_SESSION['is_Admin'])){
    header('Location: redirect_auth.php');
    exit;
}
?>

<main><!--
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

                    -->


    <div class="competition">
        <div class="container">
            <h4>Maak een wedstrijdschema:</h4>

            <form action="fifaController.php" method="post">
                <input type='hidden' name='type' value='create-competition'>
                <label for="wedstrijdschema"><b>Maak een Wedstrijdschema</b></label>

                <button type="submit">Wedstrijdschema Maken</button>
                <a href="matches.php">kijk of er al wedstrijden beschikbaar zijn.</a>
            </form>
            
        </div>
    </div>


</main>


<?php

require 'footer.php';
?>
