
 
 
<h1>Add a List</h1>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
	<label>List Name</label>
	<input type="text" name="list_name" /><br />
	<label>List Body</label>
	<textarea rows="5" cols="50" name="list_body"></textarea><br />
	<input type="submit" value="Create" name="submit" />
</form>