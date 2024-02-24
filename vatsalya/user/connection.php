<?php
error_reporting(0);
$res = mysql_connect('localhost', 'root', '');
if (!$res) {
    die('Could not connect: ' . mysql_error());
}
$db = mysql_select_db('vatsalya',$res);

?>