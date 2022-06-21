<?php
include("connection.php");
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];
    //sql command for deletion
    $sql="delete from reg_stud where id=$id";
    if(mysqli_query($conn,$sql))
    {   //js embedded with php
        echo "<script>";
        echo 'alert("Deleted successfully");';
        echo 'window.location.href="admin-login.php";';
        echo "</script>";
    } 
    else
    {  
        echo "<script>";
        echo "alert('Deletion failed');";
        echo 'window.location.href="admin-login.php";';
        echo "</script>"; 
    }  
}
?>
