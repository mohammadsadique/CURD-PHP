<?php
    require('insertClassFile.php');

    // table name, column name and value add dynamically.
    $tablename = "xyz";
    $column = "`role`, `name`,`email`,`password`";
    $value = "'$role','$name','$email','$pass'";
     
    // insertQuery is a class name
    // get_insertQuery is a method where insert query generate dynamically.
    $insert = new insertQuery($tablename,$column,$value);
    echo $value = $insert->get_insertQuery();

?>