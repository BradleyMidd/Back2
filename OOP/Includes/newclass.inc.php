<?php

//Make new class called NewClass
class NewClass
{

    //Properties and Methods goes here
    //Make a property called info which is equal to "This is some info"
    public $info = "This is some info";

}

//Instantiate a class is creating an object that contains all the information regarding the class
$object = new NewClass;
//Get all information of the class
var_dump($object);
?>