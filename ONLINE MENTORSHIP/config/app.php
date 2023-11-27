<?php
session_start();
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_NAME','mentorship database');

include_once('DatabaseConnection.php');
$db = new DatabaseConnection;
function redirect($message, $page)
{
   $redirectTo = $page;
    $_SESSION['message'] = "$message";
    header("Location: $page");
    exit(0);

}
function validateInput($dbcon,$input)
{
    return mysqli_real_escape_string($dbcon,$input);
}
?>