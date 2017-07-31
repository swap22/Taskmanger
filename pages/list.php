<?php
$list_id = $_GET['id'];
  
echo '<h3>Tasks</h3>';
if($rows){
echo '<ul class="items">';
foreach($rows as $task){
	echo '<li><a href="?page=task&id='.$task['id'].'">'.$task['task_name'].'</a></li>';
}
echo '</ul>';
} else {
	echo 'No tasks for this list - <a href="index.php?page=new_task&listid='.$_GET['id'].'">Create One Now</a>';
}