<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<a href="index.php"><title>TaskManager Application</title></a>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">

</head>
<body>

 
 <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="brand" href="#">myTodo</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
      <!--Hello-->
              
              <strong>Hello, </strong>
              
      
            </p>
            <ul class="nav">
              <li class="active"><a href="http://localhost/mytasks">Home</a></li>  
              
                  <li><a href="index.php?page=register">Register</a></li>
              
  
                  <li><a href="index.php?page=new_list">Add List</a></li>
                  <li><a href="index.php?page=new_task">Add Task</a></li>
                    
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
 
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
          <div style="margin:0 0 10px 10px;">
          <!--SIDEBAR-->
          <h3>Login Form</h3>
            <form action="" method="post">
              
                
                    <?php echo $msg.'<br />'; ?>
                
                <label>Username: </label><br />
                <input type="text" name="username" /><br />
                <label>Password: </label><br />
                <input type="password" name="password" /><br />
                <br />
                <input type="submit" value="Login" name="login_submit" />
              
                <input type="submit" value="Logout" name="logout_submit" />
              
          </form>
          </div>
          </div><!--/.well -->
        </div><!--/span-->
 
        <div class="span9">
        <!--MAIN-->
          
		</div><!--/span-->
		</div><!--/row-->
      <hr>
 
      <footer>
        <p>&copy; swapnil production 2017</p>
      </footer>
    </div><!--/.fluid-container-->
    <script src="js/jquery.js"></script>
    <script src="js/site.js"></script>
</body>
</html>