<?php
     $task_id = $_GET['id'];
//Instantiate Database object
$database = new Database;
//Query
$database->query('SELECT * FROM tasks WHERE id = :id');
$database->bind(':id',$task_id);
$row = $database->single();
 

?>
<br />
<br />
<a href="?page=edit_task&id=<?php echo $row['id']; ?>">Edit Task</a>