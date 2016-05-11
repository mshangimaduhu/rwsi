<?php


include 'config.php';


 
$result = mysql_query("Select category_id, category_name from tbl_incidents_category"); 
 
echo "<select name='txtIncidents_Category'> required";


 while ($row = mysql_fetch_assoc($result )) 

{
   
    echo "<option value = '".$row[category_id]."'>".$row[category_name]."</option>"; 

 }
echo "</select>";


?>