<?php

require 'header.php';

$sql = "SELECT teamname, points FROM teams order by points desc, teamname"; //gewoon een opslag van een string die je later gaat gebruiken
$query = $db->query($sql); //verzoek naar de database, voer sql van hierboven uit
$positions = $query->fetchAll(PDO::FETCH_ASSOC); //multie demensionale array //alles binnenhalen

if(!isset($_SESSION['id'])){
    header('Location: redirect.php');
    exit;
}



?>

<main>
    <div class="container">
        <div class="standen">
        	<h3>Dit is de stand:</h3>

<table>

 <?php
    /* echo '<pre>';
    var_dump($matches);*/

    $i = 1;
    foreach ($positions as $position) {

    	if ($i == 1)
    	{
    	echo "<tr>
    			<th>PS</th>
    			<th>TEAM</th>
    			<th>PT</th>
    		</tr>";
    	}
    	echo "<tr>
    		<td>$i</td>
    		<td>{$position['teamname']}</td>
    		<td>{$position['points']}</td>
    		</tr>";

    		$i++;

    }
?>
   </table>
   </div>


</div>

</main>
            
  <?php

require 'footer.php';
?>       