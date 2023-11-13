<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("yuma juliana");
var_dump($company);

$company->programmer = new BackendProgrammer("yuma juliana");
var_dump($company);

$company->programmer = new FrontendProgrammer("yuma juliana");
var_dump($company);

sayHelloProgrammer(new Programmer("yuma juliana"));
sayHelloProgrammer(new BackendProgrammer("yuma juliana"));
sayHelloProgrammer(new FrontendProgrammer("yuma juliana"));
