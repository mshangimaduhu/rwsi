<?php
$link = mysql_connect("localhost","root","") or  die('Could not connect: ' . mysql_error());
 mysql_select_db("rwsissi", $link) or die('Could not select database');

//$_GET['cboOrganizationType'] = 1 ;

if ( $_GET['cboOrganizationType'] != '' ) {
	
$_GET['val'] = urldecode( $_GET['val'] ) ;

$organization_TypeId=$_GET['cboOrganizationType'];

$table_name = mysql_fetch_assoc( mysql_query("Select Table_Mapping from tbl_organization_category where Organization_Category_Id = '".$organization_TypeId."'") ); 

$result = mysql_query( "Select Organization_Id, Organization_Name from ".$table_name['Table_Mapping'].( ( $_GET['val'] != '' ) ? " where Organization_Name like \"%".$_GET['val']."%\"":'')." order by Organization_Name" ); 

if ( mysql_num_rows( $result ) > 0 ) {

while ($row = mysql_fetch_assoc($result )) 
{
echo "<label style='display:block;' class='l_down' onclick=\"setVal('".$row[Organization_Id]."', '".$table_name['Table_Mapping']."')\"> ".$row[Organization_Name]."</label>"; 
}

} else echo '<font color="red">no result found</font>' ;

}

?>