<?php
/**
 * Created by PhpStorm.
 * User: Sam
 * Date: 22/08/2017
 * Time: 4:51 PM
 */

require('Classes/PublicClass.php');
require('Classes/StaticClass.php');


$publicClass = new PublicClass();
$publicClass->sayHi(); //Will echo hello
$publicClass->setHi('Hello Sam'); //In public classes like this, we can set variables and such
$publicClass->sayHi();// Will echo Hello Sam

//You can also do
$publicClass->hi = "Boo!";
$publicClass->sayHi();
//This will echo "Boo!"

//We don't initiate static classes like we do with public ones^
//How ever, we can now call the function without "creating" it.
StaticClass::sayHi();//Will echo hello

//This is the basics of OO PHP though