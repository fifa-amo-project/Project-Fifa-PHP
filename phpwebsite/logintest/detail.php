<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 14-4-2019
 * Time: 09:04
 */


require "config.php";
require "header.php";

$id = $_GET['id']; //sla op in variabelen
$sql = "SELECT * FROM users WHERE id = :id"; //maak plase holder
$prepare = $query = $db->prepare($sql); //voer hem niet uit, maar bereid voor
$prepare->execute([
    ':id' => $id
]);
$user = $prepare->fetch(PDO::FETCH_ASSOC)  // de query die is gedaan wil ik behandelen


?>


<div class="container">
    <div class="portfolio">
        <h1><?php echo $user['username'] ?></h1>
        <p><b>Beschrijving:</b>  <?php echo $user['password']?> </p>
    </div>

    <form action="userController.php?id=<?=$id;?>" method="post">
        <input type="hidden" name="type" value="delete">
        <input type="submit" value="Delete">
    </form>
    <a href="edit.php?id=<?=$id;?>">edit Recipe</a>
</div>

<?php

require "footer.php";

?>
