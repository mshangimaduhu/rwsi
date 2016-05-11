<?php
include'config.php';

//$_GET['cboOrganizationType'] = 1 ;

if ( $_GET['cboOrganizationType'] != '' ) {

$organization_TypeId=$_GET['cboOrganizationType'];

$table_name = mysql_fetch_assoc( mysql_query("Select Table_Mapping from tbl_organization_category where Organization_Category_Id = '".$organization_TypeId."'") ); 

$result = mysql_query( "Select Organization_Id, Organization_Name from ".$table_name['Table_Mapping']." order by Organization_Name" ); 

 
echo "<select name='txtOrganization_Id'>";


 while ($row = mysql_fetch_assoc($result )) 

{
   
    echo "<option value = '".$row[Organization_Id]."'>".$row[Organization_Name]."</option>"; 

 }
echo "</select>";

}

?>