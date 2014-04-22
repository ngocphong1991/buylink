<?php
ob_start();
error_reporting(0);
require_once('../include/db_connection.php');
ob_end_clean();

	$cid = $_GET[cid];
	$res = mysql_query("select * from subcategory where cid='$cid' order by subcategory"); ?>
	
	<select size="1" name="subcats" style="width: 200px">
	
<?  while ($row = mysql_fetch_assoc($res))
			{
				echo "<option value='$row[sid]'>$row[subcategory]</option>";
			}
?>
              	</select>