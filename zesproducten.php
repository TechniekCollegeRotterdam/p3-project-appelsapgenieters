<?php
	require 'dbconnect.php'; 
?>

<div class="container">
    <div class="row">
        <?php 
		try 
		{  
			$query = $db->prepare("SELECT givenname, surname, streetadress
			FROM client
			WHERE idclient = idclient"); 
			$query->execute();	
			if($query->rowCount()>0) 
			{
					$result=$query->fetchAll(PDO::FETCH_ASSOC);
					echo '<h3>Wijzigen</h3>';
					echo '<table class="table table-bordered table-hover tkop">';
					echo '<thead>';
					echo '<th>Voornaam</th>'; 
					echo '<th>Achternaam</th>'; 
					echo '<th>Adres</th>';	
					echo '</thead>';	
					foreach($result as $rij) 
				{ 
					echo '<tr>';
					echo '<td>'.$rij['givenname'].'</td>'; 
					echo '<td>'.$rij['surname'].'</td>'; 
					echo '<td>'.$rij['streetadress'].'</td>';					
					?>
        <?php
					echo '</tr>';	
				} 
				echo '</table>';
			}
			else 
			{
				
			}
		} 
		catch(PDOException $e) 
		{ 
			$sMsg = '<p> 
					Regelnummer: '.$e->getLine().'<br /> 
					Bestand: '.$e->getFile().'<br /> 
					Foutmelding: '.$e->getMessage().' 
				</p>'; 
			 
			trigger_error($sMsg); 
		} 
		$db = null;