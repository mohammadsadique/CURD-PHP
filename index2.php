<?php
    require('classfile1.php');

    // Insert Query

        $tablename = "xyz";
        $array = array(
            'name' => secureData('name'),
            'email' => secureData('email')
        );

        $inst2 = new InsertQuery();
        $inst2->setInsert($tablename,$array);
        $logins2 = $inst2->get_insertQuery();
            

        echo "<br>";
        echo "<br>";


    // Update Query

        $tablename = "xyz";
        $array = array(
            'name' => secureData('name'),
            'email' => secureData('email')
        );
        $whereclause = "`id` = '25'";

        $up = new updateQuery();
        $up->setUpdate($tablename,$array,$whereclause);
        $value = $up->get_updateQuery();