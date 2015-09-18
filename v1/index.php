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

$maxRows_Recordset1 = 5;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

mysql_select_db($database_MySql, $MySql);
$query_Recordset1 = "SELECT * FROM `project description`";
$query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
$Recordset1 = mysql_query($query_limit_Recordset1, $MySql) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);

if (isset($_GET['totalRows_Recordset1'])) {
  $totalRows_Recordset1 = $_GET['totalRows_Recordset1'];
} else {
  $all_Recordset1 = mysql_query($query_Recordset1);
  $totalRows_Recordset1 = mysql_num_rows($all_Recordset1);
}
$totalPages_Recordset1 = ceil($totalRows_Recordset1/$maxRows_Recordset1)-1;

mysql_select_db($database_MySql, $MySql);
$query_STD_INFOR = "SELECT * FROM student_info";
$STD_INFOR = mysql_query($query_STD_INFOR, $MySql) or die(mysql_error());
$row_STD_INFOR = mysql_fetch_assoc($STD_INFOR);
$totalRows_STD_INFOR = mysql_num_rows($STD_INFOR);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  
    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    
    
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

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Dashboard<span class="sr-only">(current)</span></a></li>
       
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Update<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="updatePage/update_project.php">Project</a></li>
            <li><a href="updatePage/update_department_robu.php">Robu Department</a></li>
            <li><a href="updatePage/update_department_brac.php">University Department</a></li>
            <li><a href="updatePage/Update_post_detials.php">Post Details</a></li>
            <li><a href="updatePage/update_user.php">User</a></li>
            
            
            
          </ul>
        </li>
      </ul>
       <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Insert<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="insertpage/insert_project.php">Project</a></li>
            <li><a href="insertpage/insert_robu_dept.php">Robu Department</a></li>
            <li><a href="insertpage/insert_brac_dept.php">University Department</a></li>
        	<li><a href="insertpage/insert_post.php">Post Details</a></li>
            <li><a href="insertpage/Insert_new_user.php">User</a></li>
       
            
            
          </ul>
        </li>
      </ul>
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
        <li><a href="profile.php">Profile</a></li>
      </ul>
      </li>
      <li><a href="logout.php">Logout</a></li>
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
    &nbsp;		
  <table class="table table-striped table-hover, sortable">
 
  <thead class="sortable">
    <tr class="sortable">
      <th>#</th>
      <th>PROJECT NAME</th>
      <th>PROJECT DESCRIPTION</th>
      <th>PROJECT DESTINATION</th>
      <th>PROJECT STATUS</th>
    </tr>
  </thead>
  <tbody>
    <?php do { ?>
      <tr>
        <td><?php echo $row_Recordset1['proj_id']; ?></td>
        <td><?php echo $row_Recordset1['P_Name']; ?></td>
        <td><?php echo $row_Recordset1['Proj_desc']; ?></td>
        <td><?php echo $row_Recordset1['Proj_Destination']; ?></td>
        <TD><?php echo $row_Recordset1['Current_status']; ?></TD>
      </tr>
      <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
  </tbody>
</table> 
    <script src="js/bootstrap.js"></script>
   
  </body>
</html>
<?php
mysql_free_result($Recordset1);

mysql_free_result($STD_INFOR);
?>
