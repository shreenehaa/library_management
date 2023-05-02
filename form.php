<?php
include("connection.php");
$id=$_POST["id"];
$name=$_POST["name"];
$department=$_POST["department"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$address=$_POST["address"];
$membership='not a member';

$sql="INSERT INTO t1(id,name,department,email,phone,address,membership)VALUES('$id','$name','$department','$email','$phone','$address','$membership')";
if($conn->query($sql) === TRUE){
    echo'<script>alert("data inserted successfully")</script>';
}
else{
    echo "<table>";
    echo "error: ". $sql . "<br>" .$conn->error; 
}

/*$sql = "SELECT id,name  FROM t1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
  }
} else {
  echo "0 results";
}

  $sql = "SELECT id,name  FROM t1";
$result = $conn->query($sql);

 

echo "<table border='1'>

<tr>

<th>Id</th>

<th>name</th>

</tr>";

 

while($row = $result->fetch_assoc())

  {

  echo "<tr>";

  echo "<td>" . $row['id'] . "</td>";

  echo "<td>" . $row['name'] . "</td>";

  echo "</tr>";

  }

echo "</table>";

 

$conn->close();

*/

?>