<h1>Welcome to myToDo!</h1>
 
<?php
if($_SESSION['logged_in']){
//Instantiate Database object




 
$database = new Database;
 
//Get logged in user
$list_user = $_SESSION['username'];
 
//Query
$database->query('SELECT * FROM lists WHERE list_user=:list_user');
$database->bind(':list_user',$list_user);
$rows = $database->resultset();
 
