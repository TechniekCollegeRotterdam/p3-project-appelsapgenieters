<?php 
/* This is a simple way to clear out all of the session variables. */
session_start();

/* `session_unset()` is clearing out all of the session variables. */
session_unset();
/* Destroying the session. */
session_destroy();

/* This is a way to redirect the user to another page. */
header("Location: index.php");