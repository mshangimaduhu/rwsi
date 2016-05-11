<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>REAL TIME WARNING SYSTEM FOR INFORMATION SYSTEMS SECURITY INCIDENTS(RWSISSI)</title>
<style type="text/css">
<!--
.style4 {
	color: #000000;
	font-family: Arial, Helvetica, sans-serif;
}
.style5 {font-family: Arial, Helvetica, sans-serif}
.style8 {color: #990033}
.style9 {color: #990000}
body {
	background-color: #F0F0Ff;
}
.style14 {font-family: "Courier New", Courier, monospace}

.l_down {
	
}

.l_down:hover {
	background-color:blue;
	color:white;
	cursor:pointer;
}
.style15 {
	font-size: 22px;
	font-weight: bold;
	color: #CC6600;
}
.style17 {color: #000066}
-->
</style>

</head>

<script type="text/javascript">

function checkDate(field)
  {
    var allowBlank = true;
    var minYear = 1902;
    var maxYear = (new Date()).getFullYear();

    var errorMsg = "";

    // regular expression to match required date format
    re = /^(\d{1,2})\/(\d{1,2})\/(\d{4})$/;

    if(field.value != '') {
      if(regs = field.value.match(re)) {
        if(regs[1] < 1 || regs[1] > 31) {
          errorMsg = "Invalid value for day: " + regs[1];
        } else if(regs[2] < 1 || regs[2] > 12) {
          errorMsg = "Invalid value for month: " + regs[2];
        } else if(regs[3] < minYear || regs[3] > maxYear) {
          errorMsg = "Invalid value for year: " + regs[3] + " - must be between " + minYear + " and " + maxYear;
        }
      } else {
        errorMsg = "Invalid date format: " + field.value;
      }
    } else if(!allowBlank) {
      errorMsg = "Empty date not allowed!";
    }

    if(errorMsg != "") {
      alert(errorMsg);
      field.focus();
      return false;
    }

    return true;
  }

</script>

<script type="text/javascript">

function checkTime(field)
  {
    var errorMsg = "";

    // regular expression to match required time format
    re = /^(\d{1,2}):(\d{2})(:00)?([ap]m)?$/;

    if(field.value != '') {
      if(regs = field.value.match(re)) {
        if(regs[4]) {
          // 12-hour time format with am/pm
          if(regs[1] < 1 || regs[1] > 12) {
            errorMsg = "Invalid value for hours: " + regs[1];
          }
        } else {
          // 24-hour time format
          if(regs[1] > 23) {
            errorMsg = "Invalid value for hours: " + regs[1];
          }
        }
        if(!errorMsg && regs[2] > 59) {
          errorMsg = "Invalid value for minutes: " + regs[2];
        }
      } else {
        errorMsg = "Invalid time format: " + field.value;
      }
    }

    if(errorMsg != "") {
      alert(errorMsg);
      field.focus();
      return false;
    }

    return true;
  }

</script>









<script type="text/javascript">

  function checkForm(form)
   var submitting = false;
  {
    return checkDate(form.txtIncident_Date)&& checkTime(form.txtIncident_Time);
	resetForm(form);
  }
  
  
  function resetForm(form)
  {
    form.cmdSubmit.disabled = false;
    form.cmdSubmit.value = "Submit";
    submitting = false;
  }

</script>






<script type="text/javascript" src="js/jquery-1.11.0.min.js" ></script>

<script type="text/javascript">

var timer = '' ;

function load_list() {
var o = $( '#sel_organizationType' ) ;
$( '#lbl_cboOrganizationType' ) . load( 'organizationid.php?cboOrganizationType=' + o.val() ) ;
}

function listpop( t ) {
if ( t > 0 ) {
try {
clearTimeout( timer ) ;
timer = setTimeout( "listpop(0)", ( t*1000 ) ) ;
} catch ( e ) {
	}
} else {

var o = $( '#d_txtOrganization_Id' ) ;

var pos = o.offset();

var div = $( '#popdiv' ) ;

div.css( 'left', pos.left ) ;

div.css( 'top', pos.top + o.height() + 8 ) ;

div.css( 'width', o.width() - 6 ) ;

div.html( 'loading...' ) ;

div . load( 'organizationid2.php?cboOrganizationType=' + $( '#sel_organizationType' ).val() + '&val=' + encodeURIComponent( o.val() ) + '&rand=' + Math.random() ) ;

div.css( 'display', 'block' ) ;

	}
}

function setVal( i, v ) {
$.get( 'getname.php?tbl=' + v + '&id=' + i + '&rand=' + Math.random(), function(d) { $( '#d_txtOrganization_Id' ).val( d ) ; } ) ;
$( '#txtOrganization_Id_h' ).val( i ) ;
$( '#popdiv' ).css( 'display', 'none' ) ;
}

$().ready( function() {load_list()} ) ;
</script>

<body>

<div id="popdiv" style="position:absolute;top:10;left:100;border-style:solid;border-width:1px;border-color:gray;background-color:white;z-index:3;padding:4px;display:none;min-width:100px;min-height:13px;max-height:350px;box-shadow: 2px 2px 2px #888888;overflow:auto;" >;</div>

<span class="style15">REAL TIME WARNING SYSTEM FOR INFORMATION SYSTEMS SECURITY
  
INCIDENTS(RWSISSI) </span><br />
<span class="style17">Use the form below to report a information security incident(s). <br />
Required fields are denoted by an asterisk (*)</span>

<form id="frmIncident_Reporting" name="frmIncident_Reporting" method="post" action="insert.php" onsubmit="return checkForm(this);">

<table width="1220" height="370" border="0.5" cellpadding="2" cellspacing="0" bgcolor="#FFFFCC">
  <tr bordercolor="#CC99FF">
    <td style='padding:2px 2px 2px 80px' width="1216" height="20"><label><span class="style5">Type of Organization Reporting<span class="style8">*</span></span>
          <?php include 'organizationType.php'; ?>
    </label></td>
  </tr>
  <!-- type one -->
  <tr>
    <td style='padding:2px 2px 2px 80px' height="15"><label><span class="style5">Organization Name<span class="style8">*</span></span> </label>
        <label id="lbl_cboOrganizationType">
          <?php include 'organizationid2.php'; ?>
      </label>    </td>
  </tr>
  <!-- type two 

id ya organization itakuwa kwenye element txtOrganization_Id_h

-->
  <tr>
    <td style='padding:2px 2px 2px 80px' height="15"><label><span class="style5">First Name<span class="style9">*</span></span>
      <input type="text" name="txtFirstName" required id="txtFirstName" />
      <span class="style5">Last Name<span class="style9">*</span></span>
          <input type="text" name="txtLastName" required id="txtLastName" />
          <span class="style5">Telephone</span><span class="style8">*</span>
          <input type="text" name="txtTelephone" required="required" id="txtTelephone" />
          <span class="style5">E-Mail</span><span class="style8">*</span>
          <input type="email" name="txtEmail" required="required" placeholder="Enter a valid email address"size="30" />
</label></td>
  </tr>
  <tr>
    <td style='padding:2px 2px 2px 80px' height="27"><label><span class="style5">Incident Category</span><span class="style8">*</span>
          <?php include 'incidents_category.php'; ?>
    </label></td>
  </tr>
  <tr>
    <td style='padding:2px 2px 2px 80px' height="58"><label><span class="style5">Incident Description (Please provide a short description of the incident)</span><span class="style8">*</span><br />
          <textarea name="txtIncident_Description" id="txtIncident_Description" cols="80" rows="2"></textarea>
    </label></td>
  </tr>
  
  <tr>
<td style='padding:2px 2px 2px 80px' height="26"><span class="style5">Incident Date</span><span class="style8">*:</span>
        <input type="text" size="12" required="required" pattern="\d{1,2}/\d{1,2}/\d{4}" placeholder="dd/mm/yyyy" name="txtIncident_Date"/>
        <span class="style5">Incident Time:</span>
        <input type="text" size="12" pattern="\d{1,2}:\d{2}([ap]m)?" name="txtIncident_Time" />
        <small>(eg. 18:17 or 6:17pm)</small></td>
  </tr>
  <tr>
<td style='padding:2px 2px 2px 80px' height="30"><label><span class="style5">IP Adress of Affected system:</span>
          <input name="txtIP_of_Affected_System" type="text" id="txtIP_of_Affected_System" />
          <span class="style5">Ports Involved Attack from Affected System</span>:
      <input name="txtPorts_Affected_System" type="text" id="txtPorts_Affected_System" />
          <br />
    </label></td>
  </tr>
  <tr>
<td style='padding:2px 2px 2px 80px' height="25"><label><span class="style5">Systems Affected:</span>
          <textarea name="txtSystems_Affected" id="txtSystems_Affected" cols="35" rows="1"></textarea>
          <span class="style5">Anti-virus Software on the Affected System</span>:
          <input name="txtAntivirus_Installed_Ver_latest_updates" type="text" id="txtAntivirus_Installed_Ver_latest_updates" size="50" />      
      <br />
    </label></td>
  </tr>
  <tr>
<td style='padding:2px 2px 2px 80px' height="27" align="left" valign="middle"><label><span class="style5"> Operating System of the Affected System:</span>
          <textarea name="txtOperating_System_of_Affected_System_ver_patch" cols="40" rows="1" id="txtOperating_System_of_Affected_System_ver_patch"></textarea>
    </label></td>
  </tr>
  <tr>
<td style='padding:2px 2px 2px 80px'  height="30"><label><span class="style5"> Attacker IP address:</span>
          <input name="txtAttacker_IP" type="text" id="txtAttacker_IP" size="30" />
          <span class="style5">Attacker Port(s):</span>
          <input type="text" name="txtAttacker_port" id="txtAttacker_port" />
          <br />
    </label></td>
  </tr>
  <tr>
<td style='padding:2px 2px 2px 80px' height="27"><label><span class="style5">Method used to  Identify Incident</span>
          <textarea name="txtMethod_Used_Identify_Incident" cols="45" rows="1" id="txtMethod_Used_Identify_Incident"></textarea>
    </label></td>
  </tr>
  <tr>
    <td style='padding:2px 2px 2px 80px' height="23" valign="middle"><label> <span class="style4">Impact to Organization:
      <textarea name="txtImpact_to_Organization" id="txtImpact_to_Organization" cols="50" rows="1"></textarea>
      </span><span class="style4"> Resolution:
        <textarea name="txtResolution" cols="35"  rows="1" id="txtResolution"></textarea>
    </span></label></td>
  </tr>
</table>
<script type="text/javascript">

 if(submitting) {
    alert('The form is being submitted, please wait a moment...');
    myButton.disabled = true;
    return false;
  }
  if(checkForm(this)) {
    cmdSubmit.value = 'Submitting form...';
    submitting = true;
    return true;
  }
</script>

<fieldset>
   
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style14">
<input name="cmdSubmit" type="submit" class="style15" id="cmdSubmit" value="Submit" />
</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style14">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span>
  
    <label></label>
    <span class="style14">
    <input name="textResetForm" type="reset" class="style15" id="textResetForm" onclick="
  resetForm(this.form);/&gt;
    &lt;/span&gt;&lt;/label&gt;        &lt;span class=" value="Reset"style13">
    </span>
</fieldset>
</form>
<p>&nbsp;</p>
</body>
</html>
