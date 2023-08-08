<?php
/* This code is PHP. This script is for validation of the sign in option. This is used for the connection of PHP to wammp SERVER */
session_start(); /*initialization of the code */


$con = mysqli_connect('localhost','id17363767_id17363564_root', ']9<dV$]ntw!dR{RS');/*This is the connection variable '$con'. localhost is the database call link, root is the username of
the database, 123456 is the password of the database */

mysqli_select_db($con, 'id17363767_id17363564_register');/*This selects the databse records inside userregistration database. */
$name = $_POST['user']; /* this is a variable that gets user data from the user */
$pass = $_POST['password']; /* this is a variable that gets user data from the user */

$s = "select * from usertable WHERE name='$name' && password = '$pass'";  /* selects everything from the databse which values are $name and
$pass */

$result = mysqli_query($con, $s); /*queries from $con and $s */
$num = mysqli_num_rows($result); /*counts the numer of rows of the database record*/

if($num == 1) /*if there is a valid account present in the database then the program will go to the order page*/
{
    header('location:store.php');
}
   
else /*if there is no record present, then the program will ask again for a valid account*/
{
     header ('location:login.php');
}   


?>