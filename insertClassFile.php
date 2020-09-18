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

    class updateQuery {
        
        public $u_tablename;
        public $u_colval;
        public $u_whereclause;

        function __construct($u_tablename,$u_colval,$u_whereclause){
            $this->tablename = $u_tablename;
            $this->ColVal = $u_colval;
            $this->WhereClause = $u_whereclause;
        }
        function get_updateQuery(){
            return $update = "UPDATE `$this->tablename` SET $this->ColVal WHERE $this->WhereClause";
        }
    }
    
    
?>