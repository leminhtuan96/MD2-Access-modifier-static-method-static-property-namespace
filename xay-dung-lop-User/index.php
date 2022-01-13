<?php
include_once "User.php";
$add1 = new User("tuan","tuanmokc@gmail.com",1);
$add2 = new User("tuan","tuanmokc@gmail.com",2);

echo $add1->getInfo();
echo "<br>";
echo $add1->isAdmin();
echo "<br>";
echo $add2->getInfo();
echo "<br>";
echo $add2->isAdmin();

