<style>
#stuff{ background-color: red }
</style>
<?php
date_default_timezone_set('EST');
$today = date("D , M, Y");  
//echo $today;
?>
<?php
if (!isset($_REQUEST["month"])) $_REQUEST["month"] = date("n");
if (!isset($_REQUEST["year"])) $_REQUEST["year"] = date("Y");
?>
<?php
$monthNames = Array(1=>"January", 2=>"February", 3=>"March", 4=>"April", 5=>"May", 6=>"June", 7=>"July",
8=>"August", 9=>"September", 10=>"October", 11=>"November", 12=>"December");
//var_dump($monthNames);
?>
<?php 

$aMonths = $_REQUEST["month"];
$aYear = $_REQUEST["year"];

$PrevYear = $aYear;
$NextYear = $aYear;
$PrevMonth = $aMonths - 1;
$NextMonth = $aMonths + 1;
$aDay="";
if ($PrevMonth == 0 ) {
    $PrevMonth = 12;
    $PrevYear = $aYear - 1;
}
if ($NextMonth == 13 ) {
    $NextMonth = 1;
    $NextYear = $aYear + 1;
}
$table = "<table>";
//if($monthNames = $today)
//echo $monthNames;



?>
<table width="200">
<tr align="center">
<td bgcolor="#999999" style="color:#FFFFFF">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="50%" align="left">  <a href="<?php echo $_SERVER["PHP_SELF"] . "?month=". $PrevMonth . "&year=" . $PrevYear; ?>" style="color:#FFFFFF">Previous</a></td>
<td width="50%" align="right"><a href="<?php echo $_SERVER["PHP_SELF"] . "?month=". $NextMonth . "&year=" . $NextYear; ?>" style="color:#FFFFFF">Next</a>  </td>
</tr>
</table>
</td>
</tr>
<tr>
<td align="center">
<table width="100%" border="0" cellpadding="2" cellspacing="2">
<tr align="center">
<td colspan="7" bgcolor="#999999" style="color:#FFFFFF"><strong><?php echo $monthNames[$aMonths].' '.$aYear; ?></strong></td>
</tr>
<?php
$timestamp = mktime(0,0,0,$aMonths,1,$aYear);
$maxday = date("t",$timestamp);
$thismonth = getdate ($timestamp);
$startday = $thismonth['wday'];
$days = "";
for ($i=0; $i<($maxday+$startday); $i++) {
    if(($i % 7) == 0 ) $days.="<tr>";
    if($i < $startday) $days.= "<td></td>";
    else
    $days.= "<td  id='stuff'align='center' valign='middle' height='20px'>". ($i - $startday + 1) . "</td>";
    if(($i % 7) == 6 ) $days.= "</tr>";

        

}
$days.="</table> </td> </tr> </table>";
echo $days;
?>