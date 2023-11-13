<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$yuma = new Person("yuma juliana", "mukomuko");

// tambahkan value nama di object
$yuma->nama = "yuma juliana";

// panggil function sayHelloNull dengan parameter
$yuma->sayHelloNull("yuma juliana");

// buat object dari kelas person
$juliana = new Person("yuma", "mukomuko");

// tambahkan value nama di object
$juliana->nama = "juliana";

// panggil function sayHelloNull dengan parameter null
$juliana->sayHelloNull(null);
