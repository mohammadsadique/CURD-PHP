<?php
    
    class insertQuery {
        
        public  $i_tablename;
        public  $i_columnname;
        public  $i_value;

        function __construct($i_tablename,$i_columnname,$i_value){
            $this->tablename = $i_tablename;
            $this->columnname = $i_columnname;
            $this->value = $i_value;
        }
        function get_insertQuery(){
            return $insert = "INSERT INTO `$this->tablename` ($this->columnname) VALUES ($this->value)";
        }
    }
   


?>