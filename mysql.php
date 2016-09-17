
<?php

//$user = 'littlesh_brand2';
//$password = '%9ytjF6';
$user='root';
$password='root';
$db = 'littlesh_hack';
$host = 'localhost';
$port = 8889;

$link = mysql_connect(
   "$host:$port", 
   $user, 
   $password
);
$db_selected = mysql_select_db(
   $db, 
   $link
);

?>