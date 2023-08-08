<?php
/*This is a php code */
session_start();  /* initialization */

header('location:login.php'); /* calls the login,.php page */

$con = mysqli_connect('localhost','id17363767_id17363564_root', ']9<dV$]ntw!dR{RS'); /*This is the connection variable '$con'. localhost is the database call link, root is the username of
the database, 123456 is the password of the database */

mysqli_select_db($con, 'id17363767_id17363564_register'); /*This selects the databse records inside userregistration database. */
$name = $_POST['user']; /* this is a variable that gets user data from the user */
$pass = $_POST['password']; /* this is a variable that gets user data from the user */

$s = "select * from usertable WHERE name='$name'"; /* selects everything from the databse which values which are $name*/

$result = mysqli_query($con, $s); /*queries from $con and $s */
$num = mysqli_num_rows($result);  /*counts the numer of rows of the database record*/

if($num == 1) /*if there is an existing account present in the database when it will display "username already taken, enter another username"*/
{
        echo"username already taken, enter another username";
}
   
else  /*if the username and pass is valid and not yet taken then it will be added into the database*/
{
        $reg =" insert into usertable(name , password) values ('$name', '$pass')";
        mysqli_query($con, $reg);
        echo "Registration Successful";
 }   
?>