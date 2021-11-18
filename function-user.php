<?php
include_once("config.php"); 

class Db_Class{
    private $table_name = 'user';
        function createUser(){
            $query = "INSERT INTO PUBLIC.".$this->table_name."(name,username,email,password,role,contact,kota,alamat) ".
            "VALUES('".$this->cleanData($_POST['name'])."',
            '".$this->cleanData($_POST['username'])."',
            '".$this->cleanData($_POST['email'])."',
            '".$this->cleanData($_POST['password'])."',
            '".$this->cleanData($_POST['role'])."',
            '".$this->cleanData($_POST['contact'])."',
            '".$this->cleanData($_POST['kota'])."',
            '".$this->cleanData($_POST['alamat'])."')";
            return pg_affected_rows(pg_query($query));
        }
    
    function getUsers(){             
        $query ="select *from public." . $this->table_name . " WHERE role='1' ORDER BY name DESC";
        return pg_query($query);
    } 

    function getPartners(){             
        $query ="select *from public." . $this->table_name . " WHERE role='2' ORDER BY name DESC";
        return pg_query($query);
    } 

    function getUserById(){    
  
        $sql ="select *from public." . $this->table_name . "  where username='".$this->cleanData($_POST['id'])."'";
        return pg_query($sql);
    } 

    // function getAllUsers(){             
    //     $query ="select *from public." . $this->table_name . " ";
    //     return pg_affected_rows(pg_query($query));
    // } 

    function deleteuser(){    
  
         $sql ="delete from public." . $this->table_name . "  where username='".$this->cleanData($_POST['id'])."'";
        return pg_query($sql);
    } 

    function updateUser($data=array()){       
     
        $sql = "update public.user set name='".$this->cleanData($_POST['name'])."'
        ,email='".$this->cleanData($_POST['email'])."'
        ,password='".$this->cleanData($_POST['password'])."'
        ,role='".$this->cleanData($_POST['role'])."'
        ,contact='".$this->cleanData($_POST['contact'])."'
        ,kota='".$this->cleanData($_POST['kota'])."'
        ,alamat='".$this->cleanData($_POST['alamat'])."' where username = '".$this->cleanData($_POST['id'])."' ";
        return pg_affected_rows(pg_query($sql));        
    }
    function cleanData($val){
         return pg_escape_string($val);
    }
}



?>