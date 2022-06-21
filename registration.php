<!DOCTYPE html>
<head>
    <title>
        Student Registration
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
        width: 17.5%;
        height: 40%;
        padding: 13px 15px;
        border-color: white;
    }
    </style>
    
</head>
<body class="bodyclass">
<!-- registration form -->
<h1>Register!</h1>
    <form method="POST">
              <label>Id</label><br />
              <input type="number" autoComplete='off' name='id' required/><br /> 
                 <label>Name</label><br />
              <input type="text" autoComplete='off' name='name' required/><br /> 
              <label>Email</label><br />
              <input type="email" autoComplete='off' name='email' required /><br />
              <label for="class" name="class"> class:</label></br>
                <select name="class" id="class" style="width:20%;height:15%; border-color: white;">
                <option value="BCA">BCA</option>
                <option value="MCA">MCA</option>
                <option value="MBA">MBA</option>
                </select></br>
              <label>Address</label><br />
              <textarea name="address" autoComplete='off' required></textarea><br />
              <label>Phone number</label><br />
              <input type="phone number" autoComplete='off' name='phone' required /><br />
              <label>Password</label><br /> 
              <input type="password" name="pass" required></br></br>
             <div> <input type = "submit" name="sub" value="Register" style="width:150px"/></div>         
     </form>
    
<?php
//php connection
include('connection.php');  
// is submit button clicked
if(isset($_POST['sub']))
{
    //store form datas to variables.
          $id=  $_REQUEST['id'];
         $name =  $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $class = $_REQUEST['class'];
        $address = $_REQUEST['address'];
        $phone = $_REQUEST['phone'];
        $pass = $_REQUEST['pass'];
    //insert into db
    $sql = "INSERT INTO reg_stud  VALUES ('$id','$name',
    '$email','$class','$address','$phone','$pass')";
    if(mysqli_query($conn, $sql))
    {  
        $popup="<script>alert('Inserted successfully');</script>";
            echo $popup;
    
    }
    else
    {  
        $popup="<script>alert('Login failed!');</script>";
        echo $popup;
         mysqli_error($conn);  
    }  
    
}
//edit section
  
?>

</body>
</html>