<?php 
try 
{ 
    $db = new PDO('mysql:host=localhost;dbname=p3appelsapgenieters', 'root' ,''); 
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
?> 