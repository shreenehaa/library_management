<?php
include("connection.php");
$id=$_POST["id"];
$p="member";
$sql="UPDATE t1 SET membership = '$p' WHERE id = $id";
if($conn->query($sql) === TRUE){
    echo'<script>alert("Data Updated Successfully")</script>';
    
}
else{
    echo "error: ". $sql . "<br>" .$conn->error;
}
$conn->close();
?>