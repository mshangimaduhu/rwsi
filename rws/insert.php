<?php


$link = mysqli_connect("localhost", "mtumiaji", "userxyz", "rwsi");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

function tarehe($x )

{

$t=explode('/', $x);

return $t[2].'-'.substr('0'.$t[1],-2).'-'.substr('0'.$t[0],-2) ;

}


// Escape user inputs for security

	$Organization_Category=mysqli_real_escape_string($link, $_POST['cboOrganizationType']);
	$Organization_Id=mysqli_real_escape_string($link, $_POST['txtOrganization_Id']);
  	$FirstName= mysqli_real_escape_string($link, $_POST['txtFirstName']);
  	$LastName=mysqli_real_escape_string($link, $_POST['txtLastName']);
  	$Telephone=mysqli_real_escape_string($link, $_POST['txtTelephone']);
  	$Email=mysqli_real_escape_string($link, $_POST['txtEmail']);
    	$Incidents_category=mysqli_real_escape_string($link, $_POST['txtIncidents_Category']);
	$Incident_Description=mysqli_real_escape_string($link, $_POST['txtIncident_Description']);  
  	$Incident_Date=mysqli_real_escape_string($link, tarehe($_POST['txtIncident_Date']));
  	$Incident_Time=mysqli_real_escape_string($link, $_POST['txtIncident_Time']); 
  	$IP_of_Affected_System=mysqli_real_escape_string($link, $_POST['txtIP_of_Affected_System']);
  	$Ports_of_Affected_System=mysqli_real_escape_string($link, $_POST['txtPorts_Affected_System']);
  	$Systems_Affected=mysqli_real_escape_string($link, $_POST['txtSystems_Affected']);	
	$Attacker_port=mysqli_real_escape_string($link, $_POST['txtAttacker_port']);	
  	$Antivirus_Installed_Ver_latest_updates=mysqli_real_escape_string($link, $_POST['txtAntivirus_Installed_Ver_latest_updates']);
  	$Operating_System_of_Affected_System_ver_patch=mysqli_real_escape_string($link, $_POST['txtOperating_System_of_Affected_System_ver_patch']);
  	$Attacker_IP=mysqli_real_escape_string($link, $_POST['txtAttacker_IP']);
  	$Method_Used_Identify_Incident=mysqli_real_escape_string($link, $_POST['txtMethod_Used_Identify_Incident']);
  	$Impact_to_Organization=mysqli_real_escape_string($link, $_POST['txtImpact_to_Organization']);
  	$Resolution=mysqli_real_escape_string($link, $_POST['txtResolution']);


 
// attempt insert query execution
$sql = "INSERT INTO tbl_incidents_details(
	Organization_Category ,
	Organization_Id ,
	FirstName ,
	LastName ,
	Telephone,
	Email,
	Incident_Category ,
	Incident_Description,
	Incident_Date,
	Incident_Time,
	IP_of_Affected_System,
	Ports_of_Affected_System,
	Systems_Affected,
	Attacker_IP,
	Attacker_port,
	Antivirus_Installed_Ver_latest_updates,
	Operating_System_of_Affected_System_ver_patch,
	Method_Used_Identify_Incident,
	Impact_to_Organization,
	Resolution



) 




VALUES (

  	'$Organization_Category',
	'$Organization_Id',
	'$FirstName',
	'$LastName',
	'$Telephone',
	'$Email',
	'$Incidents_category',
	'$Incident_Description',
	'$Incident_Date',
	'$Incident_Time',
	'$IP_of_Affected_System',
	'$Ports_of_Affected_System',
	'$Systems_Affected',
	'$Attacker_IP',
	'$Attacker_port',
	'$Antivirus_Installed_Ver_latest_updates',
	'$Operating_System_of_Affected_System_ver_patch',
	'$Method_Used_Identify_Incident',
	'$Impact_to_Organization',
	'$Resolution'

)";





if(mysqli_query($link, $sql)){
    echo "<p align = center bgcolor=white class='style12'> <b>Records added successfully </b> </p>"; 
	 echo "<br><br>";
	
	echo "<p align = center bgcolor=white class='style12'><b><a href=report_incident.php>Back to Reporting Information Security Incident(s)</a></b> </p>"; 
	
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>