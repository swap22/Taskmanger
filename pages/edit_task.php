
 
<h1>Edit Task</h1>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
	<label>Task Name</label><br />
	<input type="text" name="task_name" value="<?php echo $row['task_name']; ?>" /><br />
	
	<label>Task Body</label><br />
	<textarea rows="5" cols="50" name="task_body"><?php echo $row['task_body']; ?></textarea><br />
	<label>Due Date</label><br />
	<input type='date' name='due_date' value="<?php echo date($row['due_date']); ?>" /><br />
	<label>List</label><br />
	<select name="list_id">
		<option value ="0">--Select List--</option>
		<?php foreach($rows as $list) : ?>
			<option value ="<?php echo $list['id']; ?>" <?php if($list['id'] == $task_id){ echo 'selected';} ?>><?php echo $list['list_name']; ?></option>
		<?php endforeach; ?>
	</select>
	<br />
	Mark if Completed <input type="checkbox" name="is_complete" value="1" />
	<br />
	<br />
	<input type="submit" value="Update" name="submit" />
</form>