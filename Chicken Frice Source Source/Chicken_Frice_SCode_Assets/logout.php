<?php
/*This is a php program that terminate the page for logout purpose */
session_start();/*to initialize*/
session_destroy(); /*to terminate*/

header('location:index.php') /*after termination, this goes back to the main page.*/

?>