<html>
    <head>
        <style>
       table {
  border-collapse: collapse;
  width: 70%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
tr:nth-child(even) {background-color: #f2f2f2;}
        </style>
       
        </head>
        <body><center>
            
            <?php
                 include("connection.php");
                 $id=$_POST["id"];
                 $sql="SELECT *FROM t1 WHERE id=$id";
                 echo "registration Details";

                 echo "<table >
                 <br><br><br><br>
                 <tr>
                 <th>Id</th>
                 <th>name</th>
                 <th>department</th>
                 <th>email</th>
                 <th>phone</th>
                 <th>address</th>
                 <th>membership</th>
                 
                 </tr>";
                 $result=$conn->query($sql);
                 if($result->num_rows>0){
    while ($rows=$result->fetch_assoc()){
        echo "<tr>";
        echo "<td>" . $rows['id'] . "</td>";
        echo "<td>" . $rows['name'] . "</td>";
        echo "<td>" . $rows['department'] . "</td>";
        echo "<td>" . $rows['email'] . "</td>";
        echo "<td>" . $rows['phone'] . "</td>";
        echo "<td>" . $rows['address'] . "</td>";
        echo "<td>" . $rows['membership'] . "</td>";
        
        echo "</tr>";
    }
    echo "</table>";
}
else{
    echo "<table>";
    echo "error: ". $sql . "<br>" .$conn->error; 
}
$conn->close();
?>

</center>
        </body>
</html>