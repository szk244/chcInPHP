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
    	<table id="selectTbl" width="80%">
        
<?php
	// Connect to DB, change pwd/un if necessary
	$db = mysql_connect('localhost', 'root', 'brastel');
    mysql_select_db('oamdb', $db) or die(mysql_error());
    mysql_query('SET NAMES UTF8');
	
	//which check boxes are chekced.
	//if checked puts string in variable
	$check = $_POST['check'];
	foreach($check as $checkname) {

		if($checkname == 'id'){
			$checkID = 'id';
		}
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
	if($checkID){
		print('<th scope="col">ID</th>');
	}
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
	
	//which columns to generate
	$checkbox = implode(",",$_POST['check']);
	//$checkcontents = count($_POST['check']);
	
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
		$query = "select $checkbox from excel_mgmt where EXS_Num = '$textBox'";
	}
	if($textEXS_Span){
		$query = "select $checkbox from excel_mgmt where EXS_Span = '$textEXS_Span'";
	}
	if($textSwitch_Name){
		$query = "select $checkbox from excel_mgmt where Switch_Name = '$textSwitch_Name'";
	}
	if($textChan_Group){
		$query = "select $checkbox from excel_mgmt where Chan_Group like '$textChan_Group'";
	}
	if($textL_Type){
		$query = "select $checkbox from excel_mgmt where L_Type like '$textL_Type'";
	}
	if($textLineID){
		$query = "select $checkbox from excel_mgmt where LineID like '$textLineID'";
	}
	if($textFree){
		$query = "select $checkbox from excel_mgmt where $textFree";
	}
	//$query = "select * from excel_mgmt where Switch_Name = '$checkbox[$i]'";	

	//show query result
	$result = mysql_query($query);
	$i = 0;
		
	while($row = mysql_fetch_array($result)){
		
		$i++;
		
		print('<tr>');	
		if($checkID){
			print('<td>');
			print(htmlspecialchars($row['id'])); 
			print('</td>'); 
		}
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
	  <td>
		<a href="update.php?id=<?php print(htmlspecialchars($row['id']));?>">Update</a>　
		<a href="delete.php?id=<?php print(htmlspecialchars($row['id']));?>" onclick="return confirm('Delete This?');">Delete</a>
	  </td>
<?php		
		print('</tr>');
	}
	print('<p>You have ');
	echo $i;
	print(' results.</p>');
	
?>
	</table>
    <br />
<?php 
	print('Your Query is:');
	print('<br />');
	echo $query; 
?>
	</div>

	<div id="foot"><p><a href="select_form.php">Back To Search Form</a></p></div>
</div>
</body>
</html>