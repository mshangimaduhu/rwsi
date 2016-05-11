<?php

// Connects to your Database 
// Connects to your Database 
 
include 'config.php';

$result = mysql_query("Select Organization_Category_Id, Organization_Category_Name from tbl_organization_category"); 
 
echo "<select name='cboOrganizationType' onchange='load_list(this)' id='sel_organizationType' >";

while ( $row = mysql_fetch_assoc( $result ) )

{
echo "<option value = '".$row[Organization_Category_Id]."'>".$row[Organization_Category_Name]."</option>";
}

echo "</select>";

?>