<?php

// import data/person.php
require_once "data/Manager.php";

// buat object new manager dan tambahakan value nama kemudian panggil function
$manager = new Manager();
$manager->nama = "yuma";
$manager->sayHello("juliana");

// buat object new vicepresident dan tambahakan value nama kemudian panggil function
$vp = new VicePresident();
$vp->nama = "juliana";
$vp->sayHello("yuma");
