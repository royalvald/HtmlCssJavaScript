<?php 
// server.php GET keyword="xxx"
$url="http://www.so.com/s?q=".$_GET['keyword']."&src=360portal&_re=0";
$c=file_get_contents($url);
$fc=explode('<div id="warper" >',$c);
$fc1=explode('<div id="footer">',$fc[1]);
$out='<div id="warper" >'.$fc1[0];
echo $out;
?>