<?php
ob_start();
error_reporting(0);
require_once('../include/db_connection.php');
ob_end_clean();
if($res = @mysql_query("select username from users where username='$_REQUEST[un]'"))
$U = @mysql_num_rows($res);
else $U = 0;

if($res2 = @mysql_query("select email from users where email='$_REQUEST[em]'"))
$E = @mysql_num_rows($res2);
else $E = 0;

if ($E && $U) echo 'UE';
elseif($E) echo 'E';
elseif($U) echo 'U';
else echo 'A';
?>