<?php

// import data/person.php
require_once "data/person.php";

// buat object baru dari kelas person
$person1 = new Person("yuma juliana", "mukomuko");

// panggil function
$person1->sayHello("yuma");

// panggil self keyword
$person1->info();
