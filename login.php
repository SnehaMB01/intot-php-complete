<!DOCTYPE html>
<head>
    <title>
        Admin Login
    </title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* input field properties */
        input
         {
            width: 20%;
             padding: 12px 15px;
             margin: 5px 0;
             border-color: white;
              box-sizing: border-box;
        }
        /* submit button properties */
        input[type=submit]
     {
        background-color: grey;
         border: none;
         color: white;
         padding: 16px 32px;
         text-decoration: none;
         margin: 4px 2px;
         cursor: pointer;
         border-radius: 50%;
    }
    textarea
    {
        width: 17%;
        height: 40%;
        padding: 13px 15px;
        border-color: white;
    }
    </style>
    
</head>
<body class="bodyclass">
 <div>
    <h1>Hy admin!</h1>
    <form name="f1" method = "POST">
            <label>id</label><br />
              <input type="text" autoComplete='off' name='id' required/><br /> 
              <label>Password</label><br /> 
              <input type="password" name="pass" required></br></br>
             <div> <input type = "submit" name="sub" value="Login"style="width:150px"/></div>         
     </form>
</div>
<?php
//php connection 
// admin authentication
include('connection.php');  
if(isset($_POST['sub']))
{
    $id = $_POST['id'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $id = stripcslashes($id);  
        $password = stripcslashes($password);  
        $id = mysqli_real_escape_string($conn, $id);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select *from admin where id = '$id' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){   
            $popup="<script>alert('Login successful!');</script>";
            echo $popup;
            header("Location: admin-login.php"); 
            exit;    
        }  
        else{  
            $popup="<script>alert('Login failed!');</script>";
            echo $popup;
        }     
}

?>
</body>
</html>