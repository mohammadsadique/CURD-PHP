# CURD-PHP
CURD File made with class generate dynamic query for insert,update and delete. 

This project contain two file first is insertClassFile.php and second is index.php

1. insertClassFile.php


* You need to include these file on your project 


* Don't do any changes on it.

2. index.php


* These file contain dynamic query for insertion.


* You can add Table Name, Column Name and Values


Example :-


    $tablename = "xyz";
	
	
    $column = "`role`, `name`,`email`,`password`";
	
	
    $value = "'$role','$name','$email','$pass'";
	
	
After these, use insertQuery() these is class name and get_insertQuery() is a method


* get_insertQuery() is a method where insert query generate dynamically.


	
	
    $insert = new insertQuery($tablename,$column,$value);
	
	
    echo $value = $insert->get_insertQuery();
	
	
