<?php 
session_start();

session_unset();
session_destroy();

header("Refresh: 3; index.php");
echo "Loguit succesvol";