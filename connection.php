<!-- connection page -->
<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "intot_student";  
      
    $conn = mysqli_connect($host, $user, $password, $db_name);  
    //check connection status
    // if(!$conn)
    // {
    //     echo "connection error";
    // }
    // else
    // {
    //     echo "connection successful";
    // }
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  