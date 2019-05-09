<?php
require 'header.php';
$id = $_GET['id'];

$sql =  "SELECT * FROM teams WHERE id = :id";
$prepare =  $db->prepare($sql);
$prepare->execute([
    ':id' => $id
]);
$team = $prepare->fetch(PDO::FETCH_ASSOC);

$teamname = htmlentities($team['teamname']);
$p_amount = htmlentities($team['players']);

if(!isset($_SESSION['id'])){
    header('Location: redirect.php');
    exit;
}
?>
<main>
    <div class="container">
        <div class="teams">
            <h3>Dit is  <?php echo $teamname  ?></h3>
            <p>Aantal spelers: <?php echo $p_amount  ?></p>
                <img src="https://via.placeholder.com/300x200" alt="">
            <form action='fifacontroller.php?id=<?=$id?>' method="post">
                    <?php
                    
                    if(isset($_SESSION['is_Admin'])){
                        echo "
                        <div class='form-group'>
                        <input type='hidden' name='type' value='delete'>
                            <input type='submit' value='delete'>
                        </div>

                        <div class='form-group'>
                        <input type='hidden' name='type' value='edit'>
                            <a href='edit.php?id=$id'>team aanpassen</a>
                        </div>
                    
                    ";
                    }
                    ?>
            </form>
        </div> 
    </div>
</main>



<?php 
require 'footer.php';
?>