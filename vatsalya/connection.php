<?php
$res = mysql_connect('localhost', 'root', '');
error_reporting(0);
if (!$res) {
    die('Could not connect: ' . mysql_error());
}
$db = mysql_select_db('vatsalya',$res);

?>