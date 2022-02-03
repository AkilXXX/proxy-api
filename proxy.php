<?php
error_reporting(0);
$vv = file_get_contents("https://api.proxyscrape.com/v2/?request=getproxies&protocol=http&timeout=10000&country=all&ssl=all&anonymity=all"); 
echo $vv;
file_put_contents("http.txt",$vv);

if (!file_exists("done")) {
 file_put_contents("done",1);
}
$ii = intval(file_get_contents("done")) +1 ;
file_put_contents("done",$ii);
