<?php
    include('db_connect.php');

    if(isset($_GET['id'])){
        $id = mysqli_real_escape_string($conn, $_GET['id']);
    
        $sql = "SELECT * FROM Child_info WHERE child_id = $id";
    
        $results = mysqli_query($conn,$sql);
    
        $all  = mysqli_fetch_assoc($results);
    
        // mysqli_free_result($results);
    
        // mysqli_close($conn);
    
        // print_r($results);

        $status = $all['status'];

        // echo $status;

        $sql = "UPDATE `Child_info` SET status = 1 WHERE child_id=".$id;
        $results = mysqli_query($conn,$sql);
        header('Location: confirmed.php');
        echo "<script> alert('New record added successfuly')</script>";

      }