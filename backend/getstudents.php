<?php
     require_once('connect_php');

     $data = array();

     $query = "SELECT * FROM students";
     $result = mysqli_query($con, $query);

     while($row = mysqli_fetch_object($result)){
         $data[] = $row;
     }
     echo json_encode($data);
     echo mysqli_error($con);

?>
         
        



     

