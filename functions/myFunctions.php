<?php
include_once './config/mydatabase.php';
    function getUserList(){
        global $conn;
        $sql = "SELECT * FROM `users`";
        $query = mysqli_query($conn,$sql);
        $result = array();
        while($data = mysqli_fetch_assoc($query)){
            $result[] = $data;
        }
        return $result;
    }
?>