<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body><?php

include("config.php");

$tbl_name="forum_question"; // Table name 
$sql="SELECT * FROM $tbl_name ORDER BY id DESC";
// OREDER BY id DESC is order result by descending

$result=mysql_query($sql);
?>

<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td width="6%" align="center" bgcolor="#E6E6E6"><strong>#</strong></td>
<td width="53%" align="center" bgcolor="#E6E6E6"><strong>主題</strong></td>
<td width="15%" align="center" bgcolor="#E6E6E6"><strong>瀏覽次數</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>回覆篇數</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>日期/時間</strong></td>
</tr>

<?php
 
// Start looping table row
while($rows=mysql_fetch_array($result)){
?>
<tr>
<td bgcolor="#FFFFFF"><?php echo $rows['id']; ?></td>
<td bgcolor="#FFFFFF"><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><BR></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['view']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['reply']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
</tr>

<?php
// Exit looping and close connection 
}
mysql_close();
?>

<tr>
<td colspan="5" align="right" bgcolor="#E6E6E6"><a href="create_topic.php">
    <strong>發表新的主題</strong> </a>
</td>
</tr>
</table>
</body>
</html>
