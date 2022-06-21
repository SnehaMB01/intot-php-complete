<!DOCTYPE html>
<head>
    <title>
        Dashboard
    </title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="bodyclass">
<h1>Dashboard!</h1>
<div style="padding-left: 35%;padding-top:8%">
<?php
//connection
include('connection.php');  
$sql = 'SELECT * FROM reg_stud';  
$datas=mysqli_query($conn, $sql);  
if(mysqli_num_rows($datas) > 0)
{  
    //table representation
 echo "<table border='1'>
<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>Class</th>
<th>Address</th>
<th>Phone number</th>
<th>Edit</th>
<th>Delete</th>
</tr>";
 while($row = mysqli_fetch_assoc($datas))
 {  
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['stud_name'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['class'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo "<td>" . $row['ph_no'] . "</td>";
  echo "<td>";
  echo "<button><a href='edit.php?editid=" .$row['id'] ."'> Edit </a></button>";//id passing through url
  echo "</td>";
  echo "<td>";
    echo "<button><a  href='delete.php?deleteid=" .$row['id'] ."'> Delete</a></button>";
    echo "</td>";
    echo "</tr>";
}
    
 } //end of while  
else{  
echo "0 results";  
}  
?>
</div>
</body>
</html>    