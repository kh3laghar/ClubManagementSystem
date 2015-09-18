<?php require_once('Connections/MySql.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$maxRows_RobuDepartment = 10;
$pageNum_RobuDepartment = 0;
if (isset($_GET['pageNum_RobuDepartment'])) {
  $pageNum_RobuDepartment = $_GET['pageNum_RobuDepartment'];
}
$startRow_RobuDepartment = $pageNum_RobuDepartment * $maxRows_RobuDepartment;

mysql_select_db($database_MySql, $MySql);
$query_RobuDepartment = "SELECT * FROM robu_dept";
$query_limit_RobuDepartment = sprintf("%s LIMIT %d, %d", $query_RobuDepartment, $startRow_RobuDepartment, $maxRows_RobuDepartment);
$RobuDepartment = mysql_query($query_limit_RobuDepartment, $MySql) or die(mysql_error());
$row_RobuDepartment = mysql_fetch_assoc($RobuDepartment);

if (isset($_GET['totalRows_RobuDepartment'])) {
  $totalRows_RobuDepartment = $_GET['totalRows_RobuDepartment'];
} else {
  $all_RobuDepartment = mysql_query($query_RobuDepartment);
  $totalRows_RobuDepartment = mysql_num_rows($all_RobuDepartment);
}
$totalPages_RobuDepartment = ceil($totalRows_RobuDepartment/$maxRows_RobuDepartment)-1;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  	<!-- Title -->
    <title>Robu Department</title>

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
	<p>
	  <section> </section>
	  
	  
	  <!-- Bootstrap core JavaScript
    ================================================== -->
	  <!-- Placed at the end of the document so the pages load faster -->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  </p>
	 <div class="container-fluid">
  <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 style="color:#00F" >
          ROBU Department
          </h4>
        </div>
	<table class="table table-striped table-hover, sortable" border="1">
  <thead class="sortable">
    <tr class="sortable">
      
      <th>Depertment Id</th>
      <th>Director</th>
      <th>Assistant Director </th>
      <th>Executive </th>
      <th>Executive </th>
      <th>Executive </th>
    </tr>
  </thead>
  <tbody>
    
    
      <?php do { ?>
        <tr>
          
          <td><?php echo $row_RobuDepartment['rdept_id']; ?></td>
          <td><?php echo $row_RobuDepartment['rdept_name']; ?></td>
          <td><?php echo $row_RobuDepartment['Director']; ?></td>
          <td><?php echo $row_RobuDepartment['Executive_1']; ?></td>
          <td><?php echo $row_RobuDepartment['Executive_2']; ?></td>
          <td><?php echo $row_RobuDepartment['Executive_3']; ?></td>
        </tr>
        <?php } while ($row_RobuDepartment = mysql_fetch_assoc($RobuDepartment)); ?>
  </tbody>
</table> 
</div>
  </div>
</div>
	<p>
	  <script src="js/bootstrap.js"></script>
  </p>
   
  </body>
</html>
<?php
mysql_free_result($RobuDepartment);
?>
