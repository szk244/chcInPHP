<?php
require('dbconnect.php');

$sql = sprintf('INSERT INTO excel_mgmt SET EXS_Num=%d, Span_Num="%d", EXS_Span="%s", Switch_Name="%s", Chan_Group="%s", SLOT_Number="%s", Line="%s", PortID="%s", L_Type="%s", LineID="%s", Note="%s"',
	mysql_real_escape_string($_POST['EXS_Num']),
	mysql_real_escape_string($_POST['Span_Num']),
	mysql_real_escape_string($_POST['EXS_Span']),
	mysql_real_escape_string($_POST['Switch_Name']),
	mysql_real_escape_string($_POST['Chan_Group']),
	mysql_real_escape_string($_POST['SLOT_Number']),
	mysql_real_escape_string($_POST['Line']),
	mysql_real_escape_string($_POST['PortID']),
	mysql_real_escape_string($_POST['L_Type']),
	mysql_real_escape_string($_POST['LineID']),
	mysql_real_escape_string($_POST['Note'])
);
mysql_query($sql) or die(mysql_error());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Insert New</title>
</head>
<body>
<div id="wrap">
  <div id="head"></div>
  <div class="content">
    <p><h3>Inserted</h3></p>
    <p><a href="select_form.php">Back To Select Page</a></p>
  </div>
  <div id="foot"> </div>
</div>
</body>
</html>
