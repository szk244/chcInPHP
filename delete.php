<?php
require_once('dbconnect.php');

$viewID = mysql_real_escape_string($_REQUEST['idNum']);

$sql = sprintf("DELETE FROM excel_mgmt WHERE id=%d",
	mysql_real_escape_string($_REQUEST['idNum'])
);
mysql_query($sql) or die(mysql_error());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Delete</title>
</head>
<body>
<div id="wrap">
  <div id="head"></div>
  <div class="content">
    <p><h3>Data has been deleted</h3></p>
    <p><a href="select_form.php">Back To Search</a></p>
  </div>
  <div id="foot">
  </div>
</div>
</body>
</html>
