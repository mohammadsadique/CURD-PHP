<?php
    require('insertClassFile.php');

    // Insert Query
    // table name, column name and value add dynamically.
    $tablename = "xyz";
    $column = "`role`, `name`,`email`,`password`";
    $value = "'$role','$name','$email','$pass'";
     
    // insertQuery is a class name
    // get_insertQuery is a method where insert query generate dynamically.
    $insert = new insertQuery($tablename,$column,$value);
    echo $value = $insert->get_insertQuery();

    echo "<br>";
    echo "<br>";

    // Update Query
    // table name, column name with value and where clause condition.
    $tablename = "xyz";
    $column_value = "`name`='$name',`email`='$email'";
    $whereclause = "`id` = '$id'";

    // updateQuery is a class name
    // get_updateQuery is a method where update query generate dynamically.
    $update = new updateQuery( $tablename, $column_value, $whereclause );
    echo $update->get_updateQuery();



?>