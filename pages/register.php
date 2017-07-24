
 
<h3>Register</h3>
<p>Please use the form below to register at our site</p>

 <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
 				<label>First Name: </label>
                <input type="text" name="first_name" value="<?php if($_POST['first_name'])echo $_POST['first_name'] ?>" /><br />
                <label>Last Name: </label>
                <input type="text" name="last_name" value="<?php if($_POST['first_name'])echo $_POST['last_name'] ?>" /><br />
 
                <label>Email: </label>
                <input type="text" name="email" value="<?php if($_POST['email'])echo $_POST['email'] ?>" /><br />
                <label>Username: </label>
                <input type="text" name="username" value="<?php if($_POST['username'])echo $_POST['username'] ?>" /><br />
                <label>Password: </label>
                <input type="password" name="password" value="<?php if($_POST['password'])echo $_POST['password'] ?>"/><br />
                 <label>Confirm Password: </label>
                <input type="password2" name="password2" value="<?php if($_POST['password2'])echo $_POST['password2'] ?>" /><br />
                <br />
                <input type="submit" value="Register" name="register_submit" />
             
          </form>