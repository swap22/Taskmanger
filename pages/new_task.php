
 
<h1>Add a Task</h1>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
	<label>Task Name</label>
	<input type="text" name="task_name" /><br />
	<?php if($_GET['listid']) : ?>
		<input type="hidden" name="list_id" value="<?php echo $_GET['listid']; ?>" />
	<?php else : ?>
	<label>List</label>
	<select name="list_id">
	<option value ="0">--Select List--</option>
		<?php foreach($rows as $list) : ?>
			<option value ="<?php echo $list['id']; ?>"><?php echo $list['list_name']; ?></option>
		<?php endforeach; ?>
	</select>
	<?php endif; ?>
	<br />
	<label>Task Body</label>
	<textarea rows="5" cols="50" name="task_body"></textarea><br />
	<label>Due Date</label>
	<input type='date' name='due_date' /><br />
	<input type="submit" value="Create" name="task_submit" />
</form>