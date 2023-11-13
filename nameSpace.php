<?php

// buat namespace
require "conflict.php";
// import data dari conflict
$conflict1 = new data\satu\conflict();
// buat obeject dari namespace yang di buat
$conflict2 = new data\dua\conflict();
// import data helper
require "helper.php";
// tampilkan helper menggunakan echo
echo helper\APPLICATION . PHP_OEL;
// masukan Helper\helpMe();
helper\helpMe();
