<?php

// import data/person.php
require_once "data/Person.php";

// buat define
define("APPLICATION", "yuma belajar php");

// buat const app version
const APP_VERSION = "1.0.0";

// tampilkan hasil
echo APPLICATION . PHP_EOL;
echo APP_VERSION . PHP_EOL;
echo Person::APPLICATION . PHP_EOL;
