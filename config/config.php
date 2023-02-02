<?php

class Database
{
    private $servername = "localhost";
    private $password = "";
    private $username = "root";
    private $dbname = 'divblog';
    public $db;

    public function __construct()
    {
        $this->db = new mysqli($this->servername, $this->username, $this->password,$this->dbname);
        if ($this->db->connect_error) {
            die("Connection failed: " . $this->db->connect_error);
        }
    }

    public function select($table,$row="*",$where=null,$order=null){
        $query='SELECT '.$row.' FROM '.$table;
        if($where!=null){
            $query.=' WHERE '.$where;
        }
        if($order!=null){
            $query.=' ORDER BY '.$order;
        }
        $result=$this->db->query($query);
        return $result;
    }
    public function delete($table,$id){

            $delete = "DELETE  FROM ".$table." WHERE id=".$id;

        $del=$this->db->query($delete);
        if($del){
            return true;
        }else{
            return false;
        }
    }

    public function insert($table,$value = []){
            $keys = implode(',',array_keys($value));
            $value=implode("','",$value);
            $insert= "INSERT INTO $table($keys) VALUES('$value')";

        $ins=$this->db->query($insert);
    }

    public function update($table,$value = [],$id){
        $update = 'UPDATE '.$table.' SET ';
        $keys = array_keys($value);
        for($i = 0; $i < count($value); $i++)
        {
            $update .= $keys[$i].'="'.$value[$keys[$i]].'"';
            if($i != count($value)-1)
            {
                $update .= ',';
            }
        }
        $update.=" WHERE id=".$id;

        $ins=$this->db->query($update);
    }



}