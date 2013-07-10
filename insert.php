<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Insert</title>
</head>
<body>
<div id="wrap">
  <div id="head">
    <h1>Insert</h1>
  </div>
  <div id="content">
    <p>Insert New Information for Excel Table </p>
    <form id="frmInput" name="frmInput" method="post" action="input_do.php">
      <dl>
      <dt>
        <label for="EXS_Num">Exsel Number</label>
      </dt>
      <dd>
        <input name="EXS_Num" type="text" id="EXS_Num" size="10" maxlength="10" />
      </dd>
      <dt>
        <label for="Span_Num">Span Number</label>
      </dt>
      <dd>
        <input name="Span_Num" type="text" id="Span_Num" size="10" maxlength="10" />
      </dd>
      <dt>
        <label for="EXS_Span">Excel Number - Span Number</label>
      </dt>
      <dd>
        <input name="EXS_Span" type="text" id="EXS_Span" size="20" maxlength="20" />
      </dd>
      <dt>
        <label for="Switch_Name">Switch Name</label>
      </dt>
      <dd>
        <input name="Switch_Name" type="text" id="Switch_Name" size="20" maxlength="20" />
      </dd>
      <dt>
        <label for="Chan_Group">Channel Group Name</label>
      </dt>
      <dd>
        <input name="Chan_Group" type="text" id="Chan_Group" size="50" maxlength="50" />
      </dd>
      <dt>
        <label for="SLOT_Number">SLOT Number</label>
      </dt>
      <dd>
        <input name="SLOT_Number" type="text" id="SLOT_Number" size="20" maxlength="20" />
      </dd>
      <dt>
        <label for="Line">Type of Line</label>
      </dt>
      <dd>
        <input name="Line" type="text" id="Line" size="10" maxlength="10" />
      </dd>
      <dt>
        <label for="Port ID">Port ID</label>
      </dt>
      <dd>
        <input name="PortID" type="text" id="PortID" size="50" maxlength="50" />
      </dd>
      <dt>
        <label for="L_Type">Line Type</label>
      </dt>
      <dd>
        <input name="L_Type" type="text" id="L_Type" size="20" maxlength="20" />
      </dd>
      <dt>
        <label for="LineID">Line ID Number</label>
      </dt>
      <dd>
        <input name="LineID" type="text" id="LineID" size="50" maxlength="50" />
      </dd>
      <dt>
        <label for="Note">Note</label>
      </dt>
      <dd>
        <input name="Note" type="text" id="Note" size="100" maxlength="255" />
      </dd>
      <input type="submit" value="submit" />
    </form>
  </div>
  <div id="foot"> </div>
</div>
</body>
</html>
