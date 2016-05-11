<html>
<body>
<script type="text/javascript" src="jquery.js"></script>


<table width="100%" border="0" bgcolor="#FFCC33">
  <tr bgcolor="#99CC99">
    <td colspan="2" bordercolor="#CC9900">
      <h1 align="center">REAL TIME WARNING SYSTEM INCIDENTS<sup> RTWS</h1>
      <table cellpadding="2" cellspacing="2" bordercolor="#990099" bgcolor="#CCCCCC">
      <tr> 
      <td width="184" bordercolor="#996600"> <a href="rws/report_incident.php" onClick="goT(1)">Report Computer Incidents</a></td>
       <td width="212" bordercolor="#CC9933"><a href="rws/sms/sqlsmshandling.php" onClick="goT(2)">SMS incidents communication</a></td> 
	<td width="204" bordercolor="#CCCC00"><a href="rws/sms/sqlsmshandling.php" onClick="goT(2)">Push SMS about incidents</a></td> 
	<td width="210"><a href="rws/sms/sqlsmshandling.php" onClick="goT(2)">SMS system interactions</a></td> 
       <td width="79">Abouts Us</td> 
       <td width="84">Contact Us</td> 
       
      </tr>
      </table>



<style type="text/css">
    
iframe {
	width:100%;
}
.cust_div {
	width:100%;
	display:none;
}
</style>

<div class="cust_div" id="div_2"><iframe src="//rwsi.shinyapps.io/rwsi/" frameborder="0" style="height:1230px;"></iframe></div>
<div class="cust_div" id="div_3"><iframe src="//rws/report_incident.php" frameborder="0" style="height:500px;"></iframe></div>
<div align="center">
  <script type="text/javascript">
function goT( i ) {
$( '.cust_div' ) . css( 'display', 'none' ) ;
$( '#div_' + i ) . css( 'display', 'inline' ) ;
}

$().ready( 
function() {
goT( 2 ) ;
} ) ;
  </script>
  2016&copy;Mshangi M. Mlyatu </div>
    </body>
</html>

