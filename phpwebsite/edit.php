<?php
require 'header.php';
$id = $_GET['id'];
$sql = "SELECT * FROM teams WHERE id = :id";
$prepare = $db->prepare($sql);
$prepare->execute([
    ':id' => $id
]);

$team = $prepare->fetch(PDO::FETCH_ASSOC);
?>
<main id="edit">
<div class="team-form">
                <h3>pas een team aan:</h3>

                <form action="fifaController.php?id=<?=$id?>" method="post">
                <input type="hidden" name="type" value="edit">
                    <div class="form-group">
                        <label for="teamname"><b>Team</b></label>
                        <input type="text" placeholder="Team Naam" name="teamname" value="<?php echo htmlentities($team['teamname']) ?>" required>
                        
                        <label for="p-amount">selecteer een aantal spelers</label>
                        <select name="p-amount" id="playeramount">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="submit" id="edit_button" value="Team aanpassen">
                    </div>
                  


    </form> <!-- end of form action -->


</main>
    
<?php
require 'footer.php';
?>