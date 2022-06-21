<?php
include('connection.php');
$id=$_GET['editid'];
//for showing input field data
$sql="SELECT * FROM reg_stud WHERE id=$id";
$data=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($data);
//when update button click
if(isset($_POST['update']))
{   
    $id=  $_POST['id'];
    $name =  $_POST['name'];
   $email = $_POST['email'];
   $class = $_POST['class'];
   $address = $_POST['address'];
   $phone = $_POST['phone'];
   $pass = $_POST['pass'];
   //update operation
    $update="UPDATE reg_stud SET id=$id,stud_name='$name',email='$email',
    class='$class',address='$address',ph_no=$phone,password='$pass' Where id=$id";
    if(mysqli_query($conn,$update))
    {
        $popup="<script>alert('Updated successfully');</script>";
        echo $popup;
    } 
    else
    {  
        $popup="<script>alert('Updation operation failed!');</script>";
        echo $popup;
         mysqli_error($conn);  
    }  
}
?>
<!DOCTYPE html>
<head>
    <title>
        Updation
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
        height: 10%;
        padding: 13px 15px;
        border-color: white;
    }
    </style>
    
</head>
<body class="bodyclass">
<!-- edit form -->
<h1>Register!</h1>
    <form method="POST">
              <label>Id</label><br />
              <input type="number" value="<?php echo $row['id']?>"   autoComplete='off' name='id' required/><br /> 
                 <label>Name</label><br />
              <input type="text" value="<?php echo $row['stud_name']?>" autoComplete='off' name='name' required/><br /> 
              <label>Email</label><br />
              <input type="email" value="<?php echo $row['email']?>" autoComplete='off' name='email' required /><br />
              <label for="class" name="class"> class:</label></br>
                <select name="class" id="class" value="<?php echo $row['email']?>" style="width:20%; border-color: white;">
                <option value="BCA">BCA</option>
                <option value="MCA">MCA</option>
                <option value="MBA">MBA</option>
                </select></br>
              <label>Address</label><br />
              <textarea name="address" <?php echo htmlspecialchars($row['address']); ?> autoComplete='off' required></textarea><br />
              <label>Phone number</label><br />
              <input type="phone number"value="<?php echo $row['ph_no']?>" autoComplete='off' name='phone' required /><br />
              <label>Password</label><br /> 
              <input type="password" value="<?php echo $row['password']?>" name="pass" required></br></br>
             <div> <input type = "submit" name="update" value="Update" style="width:150px"/></div>         
     </form>
</body>
</html>
    