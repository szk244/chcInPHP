<?php
require_once('dbconnect.php');

$id = $_REQUEST['idNum'];
$sql = sprintf("SELECT * FROM excel_mgmt WHERE id=%d",
	mysql_real_escape_string($id)
);
$recordSet = mysql_query($sql);
$data = mysql_fetch_assoc($recordSet);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Update</title>
</head>
<body>
<div id="wrap">
  <div id="head"></div>
  <div class="content">
    <p><h3>Update Information</h3></p>
    <form id="frmUpdate" name="frmUpdate" method="post" action="update_do.php">
      <table width="650" class="tblinst">
        <dl>
          <tr>
            <td><dt>
                <label for="EXS_Num">Exsel Number [INT]</label>
              </dt></td>
            <td><dd>
                <input name="EXS_Num" type="text" id="EXS_Num" size="10" maxlength="10" value="<?php print(htmlspecialchars($data['EXS_Num'], ENT_QUOTES)); ?>" />
              </dd></td>
          </tr>
          <tr>
            <td><dt>
                <label for="Span_Num">Span Number [INT]</label>
              </dt></td>
            <td><dd>
                <input name="Span_Num" type="text" id="Span_Num" size="10" maxlength="10" value="<?php print(htmlspecialchars($data['Span_Num'], ENT_QUOTES)); ?>" />
              </dd></td>
          </tr>
          <tr>
            <td><dt>
                <label for="EXS_Span">Excel Number - Span Number</label>
              </dt></td>
            <td><dd>
                <input name="EXS_Span" type="text" id="EXS_Span" size="15" maxlength="15" value="<?php print(htmlspecialchars($data['EXS_Span'], ENT_QUOTES)); ?>" />
              </dd></td>
          </tr>
          <tr>
            <td><dt>
                <label for="Switch_Name">Switch Name</label>
              </dt></td>
            <td><dd>
                <input name="Switch_Name" type="text" id="Switch_Name" size="20" maxlength="20" value="<?php print(htmlspecialchars($data['Switch_Name'], ENT_QUOTES)); ?>" />
              </dd></td>
          </tr>
          <tr>
            <td><dt>
                <label for="Chan_Group">Channel Group Name</label>
              </dt></td>
            <td><dd>
                <input name="Chan_Group" type="text" id="Chan_Group" size="50" maxlength="50" value="<?php print(htmlspecialchars($data['Chan_Group'], ENT_QUOTES)); ?>" />
              </dd></td>
          </tr>
          <tr>
            <td><dt>
                <label for="SLOT_Number">SLOT Number</label>
              </dt></td>
            <td><dd>
                <input name="SLOT_Number" type="text" id="SLOT_Number" size="20" maxlength="20" value="<?php print(htmlspecialchars($data['SLOT_Number'], ENT_QUOTES)); ?>" />
              </dd></td>
          </tr>
          <tr>
            <td><dt>
                <label for="Line">Type of Line</label>
              </dt></td>
            <td><dd>
                <input name="Line" type="text" id="Line" size="10" maxlength="10" value="<?php print(htmlspecialchars($data['Line'], ENT_QUOTES)); ?>" />
              </dd></td>
          </tr>
          <tr>
            <td><dt>
                <label for="Port ID">Port ID</label>
              </dt></td>
            <td><dd>
                <input name="PortID" type="text" id="PortID" size="10" maxlength="10" value="<?php print(htmlspecialchars($data['PortID'], ENT_QUOTES)); ?>" />
              </dd></td>
          </tr>
          <tr>
            <td><dt>
                <label for="L_Type">Line Type</label>
              </dt></td>
            <td><dd>
                <input name="L_Type" type="text" id="L_Type" size="20" maxlength="20" value="<?php print(htmlspecialchars($data['L_Type'], ENT_QUOTES)); ?>" />
              </dd></td>
          </tr>
          <tr>
            <td><dt>
                <label for="LineID">Line ID Number</label>
              </dt></td>
            <td><dd>
                <input name="LineID" type="text" id="LineID" size="30" maxlength="30" value="<?php print(htmlspecialchars($data['LineID'], ENT_QUOTES)); ?>" />
              </dd></td>
          </tr>
          <tr>
            <td><dt>
                <label for="Note">Note</label>
              </dt>
              </th>
            <td><dd>
                <input name="Note" type="text" id="Note" size="50" maxlength="255" value="<?php print(htmlspecialchars($data['Note'], ENT_QUOTES)); ?>" />
              </dd></td>
          </tr>
        </dl>
      </table>
      <br />
      <input type="submit" value="Update" />
      <input type="hidden" name="id" value="<?php print(htmlspecialchars($data['id'], ENT_QUOTES)) ?>" />
    </form>
  </div>
  <div id="foot"><p><a href="select_form.php">Back To Search Form</a></p></div>
</div>
</body>
</html>
