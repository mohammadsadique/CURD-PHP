<?php
    class InsertQuery {
        public $tablename;
        public $array;

        function setInsert($tablename,$array){
            $i = 1;
            $allKey = '';
            $allvalue = '';
            $count = count($array);
            foreach($array as $keys => $value){
                if($count == $i){
                    $allKey .= '`'.$keys.'`';
                    $allvalue .= "'".$value."'";
                } else {
                    $allKey .= '`'.$keys.'`,';
                    $allvalue .= "'".$value."',";
                }
                $i++;            
            }
            $this->tblname = $tablename;
            $this->keys = $allKey;
            $this->val = $allvalue;
        }
        
        function get_insertQuery(){
            return $insert = "INSERT INTO `$this->tblname` ($this->keys) VALUES ($this->val)";
        }
    }
 

    class updateQuery {
        public $tablename;
        public $array;
        public $u_whereclause;

        function setUpdate($tablename,$array,$u_whereclause){
            $i = 1;
            $sum = '';
            $count = count($array);
            foreach($array as $keys => $value){
                if($count == $i){                   
                    $sum .= '`'.$keys.'`' .'='. "'".$value."'";
                } else {
                    $sum .= '`'.$keys.'`' .'='. "'".$value."',";  
                }
                $i++;            
            }
            $this->tblname = $tablename;
            $this->ColVal = $sum;
            $this->WhereClause = $u_whereclause;
        }
        function get_updateQuery(){
            return $update = "UPDATE `$this->tblname` SET $this->ColVal WHERE $this->WhereClause";
        }
    }



    

    

    
    function secureData($value){
        return str_replace("'", "\'", htmlspecialchars($value));
    }

?>