<?php
system('clear');
echo "_________________________\n";
echo "BOT AUTO LIKE 1 POST\n";
echo "By:lnwPHP หน้าหีไอ้สัส\n";
echo "_________________________\n";
sleep(0.05);
echo "Node ID :";
$nodeid = trim(fgets(STDIN));
echo "Cookies :";
$cookies = trim(fgets(STDIN));
echo "Number LIKE :";
$jum = trim(fgets(STDIN));
$liker = botv1 ($nodeid, $cookies, $jum);
print $liker;
?>