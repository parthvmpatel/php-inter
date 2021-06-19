<?php
    
    function display(){
        include_once 'connect.php';
        $result = mysqli_query($con, "SELECT * FROM formdata");
        return $result;
    }
    function adddata(){
        include_once 'connect.php';
        
    }
?>