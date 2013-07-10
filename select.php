<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>SELECT</title>
</head>
<body>
<div id="wrap">
  <div id="head">
    <h1></h1>
  </div>
  <div class="content">
    <table id="selectTbl" width="100%">
    <?php
	// Connect to DB, change pwd/un if necessary
	require('dbconnect.php');

	// paging related
	// for the error check on this
	// http://board.phpbuilder.com/showthread.php?10378152-RESOLVED-Notice-Undefined-index-page-in-C-\xampp\htdocs\slkweb\bukapage.php-on-line-2
	$page = $_REQUEST['page'];
	/*if(!isset($page)){
		echo "Page Not Set";
		exit;
	}else*/ if ($page == '') {
		$page = 1;
	}
	$page = max($page, 1);
	
	$checkval = $_REQUEST['checkval'];
	
	// get last page
	$sql = 'SELECT COUNT(*) AS cnt FROM excel_mgmt';
	$recordSets = mysql_query($sql);
	$table = mysql_fetch_assoc($recordSets);
	$maxPage = ceil($table['cnt'] / 20);
	$page = min($page, $maxPage);
	$start = ($page - 1) * 20;


	// which check boxes are chekced.
	// if checked puts string in variable
	
	
	if ($checkval == '') {
		$check = $_POST['check'];
		$checkbox = implode(",",$_POST['check']);
	}
	if ($checkval != '') {
		$check = explode(',', $_REQUEST['checkval']);
		$checkbox = $checkval;
	}
	
	// which columns to generate
	// $checkbox = implode(",",$_POST['check']);
	// $checkcontents = count($_POST['check']);


	foreach($check as $checkname) {

		/*if($checkname == 'id'){
			$checkID = 'id';
		}*/
		if($checkname == 'EXS_Num'){
			$checkEXS_Num = 'EXS_Num';
		}
		if($checkname == 'Span_Num'){
			$checkSpan_Num = 'Span_Num';
		}
		if($checkname == 'EXS_Span'){
			$checkEXS_Span = 'EXS_Span';
		}
		if($checkname == 'Switch_Name'){
			$checkSwitch_Name = 'Switch_Name';
		}
		if($checkname == 'Chan_Group'){
			$checkChan_Group = 'Chan_Group';
		}
		if($checkname == 'SLOT_Number'){
			$checkSLOT_Number = 'SLOT_Number';
		}
		if($checkname == 'Line'){
			$checkLine = 'Line';
		}
		if($checkname == 'PortID'){
			$checkPortID = 'PortID';
		}
		if($checkname == 'L_Type'){
			$checkL_Type = 'L_Type';
		}
		if($checkname == 'LineID'){
			$checkLineID = 'LineID';
		}
		if($checkname == 'Note'){
			$checkNote = 'Note';
		}
	}
	
	//checks for which variables to show
	print('<tr>');
	/*if($checkID){
		print('<th scope="col">ID</th>');
	}*/
	if($checkEXS_Num){
		print('<th scope="col">EXCEL Number</th>');
	}
	if($checkSpan_Num){
		print('<th scope="col">Span Number</th>');
	}
	if($checkEXS_Span){
		print('<th scope="col">EXS-Span Number</th>');
	}
	if($checkSwitch_Name){
		print('<th scope="col">Switch Name</th>');
	}
	if($checkChan_Group){
		print('<th scope="col">Channel Group</th>');	
	}
	if($checkSLOT_Number){
		print('<th scope="col">Slot Number</th>');	
	}
	if($checkLine){
		print('<th scope="col">T-1 / E-1</th>');	
	}
	if($checkPortID){
		print('<th scope="col">Port ID</th>');	
	}
	if($checkL_Type){
		print('<th scope="col">Line Type</th>');	
	}
	if($checkLineID){
		print('<th scope="col">Line ID Number</th>');	
	}
	if($checkNote){
		print('<th scope="col">Note</th>');
	}
	
	print('<th scope="col">Update / Delete</th>');
	print('</tr>');
	
	//retrieve text box input
	$textBox = $_REQUEST['EXS_Num'];
	$textEXS_Span = $_REQUEST['EXS_Span'];
	$textSwitch_Name = $_REQUEST['Switch_Name'];
	$textChan_Group = $_REQUEST['Chan_Group'];
	$textL_Type = $_REQUEST['L_Type'];
	$textLineID = $_REQUEST['LineID'];
	//Free Search
	$textFree = $_REQUEST['FreeSearch'];


	//depends on the text input determines which query to use
	if($textBox){
		$query = "select id,$checkbox from excel_mgmt where EXS_Num = '$textBox' ORDER BY id ASC LIMIT  $start ,20";
	}
	if($textEXS_Span){
		$query = "select id,$checkbox from excel_mgmt where EXS_Span = '$textEXS_Span' ORDER BY id ASC LIMIT  $start ,20";
	}
	if($textSwitch_Name){
		$query = "select id,$checkbox from excel_mgmt where Switch_Name = '$textSwitch_Name' ORDER BY id ASC LIMIT  $start ,20";
	}
	if($textChan_Group){
		$query = "select id,$checkbox from excel_mgmt where Chan_Group like '$textChan_Group' ORDER BY id ASC LIMIT  $start ,20";
	}
	if($textL_Type){
		$query = "select id,$checkbox from excel_mgmt where L_Type like '$textL_Type' ORDER BY id ASC LIMIT  $start ,20";
	}
	if($textLineID){
		$query = "select id,$checkbox from excel_mgmt where LineID like '$textLineID' ORDER BY id ASC LIMIT  $start ,20";
	}
	if($textFree){
		$query = "select id,$checkbox from excel_mgmt where $textFree ORDER BY id ASC LIMIT  . $start . ',20'";
	}
	//$query = "select * from excel_mgmt where Switch_Name = '$checkbox[$i]'";	


	//show query result
	$result = mysql_query($query);
	$i = 0;
		
	while($row = mysql_fetch_array($result)){
		
		$i++;
		
		print('<tr>');	
		/*if($checkID){
			print('<td>');
			print(htmlspecialchars($row['id'])); 
			print('</td>'); 
		}*/
		if($checkEXS_Num){
			print('<td>');
			print(htmlspecialchars($row['EXS_Num']));
			print('</td>');
		}
		if($checkSpan_Num){
			print('<td>');
			print(htmlspecialchars($row['Span_Num']));
			print('</td>');
		}
		if($checkEXS_Span){
			print('<td>');
			print(htmlspecialchars($row['EXS_Span']));
			print('</td>');
		}
		if($checkSwitch_Name){
			print('<td>');
			print(htmlspecialchars($row['Switch_Name']));
			print('</td>');
		}
		if($checkChan_Group){
			print('<td>'); 
			print(htmlspecialchars($row['Chan_Group'])); 
			print('</td>');
		}
		if($checkSLOT_Number){
			print('<td>');
			print(htmlspecialchars($row['SLOT_Number']));
			print('</td>');
		}
		if($checkLine){
			print('<td>');
			print(htmlspecialchars($row['Line']));
			print('</td>');
		}
		if($checkPortID){
			print('<td>');
			print(htmlspecialchars($row['PortID']));
			print('</td>');
		}
		if($checkL_Type){
			print('<td>');
			print(htmlspecialchars($row['L_Type']));
			print('</td>');
		}
		if($checkLineID){
			print('<td>');
			print(htmlspecialchars($row['LineID']));
			print('</td>');
		}
		if($checkNote){
			print('<td>');
			print(htmlspecialchars($row['Note']));
			print('</td>');
		}
?>
      <td><a href="update.php?idNum=<?php print(htmlspecialchars($row['id']));?>">Update</a><a href="delete.php?idNum=<?php print(htmlspecialchars($row['id']));?>" onclick="return confirm('Delete This?');">Delete</a></td>
        <?php		
		print('</tr>');
	}	
?>
    </table>
    <!-- [ PAGING ] -->
    <ul class="paging">
      <?php
if ($page > 1) {
?>
      <li><a href="select.php?page=<?php print($page - 1); ?>&checkval=<?php print($checkbox); ?>&EXS_Num=<?php print($textBox); ?>&EXS_Span=<?php print($textEXS_Span); ?>&Switch_Name=<?php print($textSwitch_Name); ?>&Chan_Group=<?php print($textChan_Group); ?>&L_Type=<?php print($textL_Type); ?>&LineID=<?php print($textLineID); ?>&FreeSearch=<?php print($textFree); ?>">Back</a></li>
      <?php
} else {
?>
      <li>Back</li>
      <?php
}
?>
      <?php
if ($page < $maxPage) {
?>
      <li><a href="select.php?page=<?php print($page + 1); ?>&checkval=<?php print($checkbox); ?>&EXS_Num=<?php print($textBox); ?>&EXS_Span=<?php print($textEXS_Span); ?>&Switch_Name=<?php print($textSwitch_Name); ?>&Chan_Group=<?php print($textChan_Group); ?>&L_Type=<?php print($textL_Type); ?>&LineID=<?php print($textLineID); ?>&FreeSearch=<?php print($textFree); ?>">Next</a></li>
      <?php
} else {
?>
      <li>Next</li>
      <?php
}
?>
    </ul>
    <!-- [ PAGING ] -->
    <br />
  </div>
  <div id="foot">
    <p><a href="select_form.php">Back To Search Form</a></p>
  </div>
<?php 
	print('<div id="outqry">');
	print('Your Query:');
	print('<br />');
	echo $query;
	print('</div>');
?>
</div>
</body>
</html>