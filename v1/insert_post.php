
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  	<!-- Title -->
    <title>New Post Insert</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    
    <!--Table sorting Javascript -->
    <script src="js/sorttable.js"></script>

   
  </head>

  <body>

    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">ROBU</a>
    </div>
<!-- Update Panel -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">DASHBOARD<span class="sr-only">(current)</span></a></li>
       
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">UPDATE<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="update_project.php">PROJECT</a></li>
            <li><a href="update_department_robu.php">ROBU DEPARTMENT</a></li>
            <li><a href="update_department_brac.php">UNIVERSITY DEPARTMENT</a></li>
            <li><a href="Update_post_detials.php">POST</a></li>
            <li><a href="update_user.php">USER</a></li>
          </ul>
        </li>
      </ul>
      <!-- Insert Panel (Dropdown) -->
       <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">INSERT<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="insert_project.php">PROJECT</a></li>
            <li><a href="insert_robu_dept.php">ROBU DEPARTMENT</a></li>
            <li><a href="insert_brac_dept.php">UNIVERSITY DEPARTMENT</a></li>
        	<li><a href="insert_post.php">POST</a></li>
            <li><a href="insert_new_student.php">STUDENT</a></li>
       </ul>
        </li>
      </ul>
<!-- View Panel (Dropdown) -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">VIEW<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="showing_student_info.php">MEMBERS</a></li>
            <li><a href="showing_project_info.php">PROJECT</a></li>
            <li><a href="showing_post_info.php">POST </a></li>
            <li><a href="showing_robu_dept.php">ROBU DEPARTMENT</a></li>
            <li><a href="showing_brac_dept.php">UNIVERSITY DEPARTMENT</a></li>
       	  </ul>
        </li>
      </ul>
      <!-- Search Panel(Dropdown) -->
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
      <ul class="dropdown-menu">
      <!-- My Profile -->
        <li><a href="profile.php">Profile</a></li>
      </ul>
      </li>
      <!-- Logout -->
      <li><a href="logout.php">LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>
	<section>
    
    
    </section>
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
   
  </body>
</html>
