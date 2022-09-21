<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration confirmation</title>
</head>
<body >

<?php   if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            
        $counter = 0;

        if (empty($username)){
            echo "<h5>Please Enter your Username!</h5>";
        }
        else { 
            $counter++; 
        }

        if (empty($email)){
            echo "<h5>Please Enter your Email!</h5>";
        } 
        else { 
            $counter++;
        }
        if (empty($password)){
            echo "<h5>Please Enter your Email!</h5>";
        }
         else { 
            $counter++; 
        }
        
        
         if($counter == 3){echo  "<h1>Register successfully</h1>      
            <ul>
            <li>Username: $username</li>
            <li>email: $email</li>
            <li>password: $password</li>
            </ul>";
            $counter=0;
        } 
        

}                                  
?>
<a href="reg_confirm.php"><button>Return to registration page</button></a>

    
</body>
</html>