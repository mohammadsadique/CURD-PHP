# CURD-PHP
CURD File made with class generate dynamic query for insert,update and delete. 

This project contain two file first is insertClassFile.php and second is index.php

insertClassFile.php


// you need to include these file on your project 


// don't do any changes on it.

index.php


// These file contain dynamic query for insertion.


// You can add Table Name, Column Name and Values


// example :-


    $tablename = "xyz";
	
	
    $column = "`role`, `name`,`email`,`password`";
	
	
    $value = "'$role','$name','$email','$pass'";
	
	
// After these


// insertQuery is a class name


    // get_insertQuery is a method where insert query generate dynamically.
	
	
    $insert = new insertQuery($tablename,$column,$value);
	
	
    echo $value = $insert->get_insertQuery();
	
	
