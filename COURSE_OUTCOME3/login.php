<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="" method="POST">
        <label>1.USERNAME</label>
        <input type="text" placeholder="enter the username" name="un"><br>
        <label>2.PASSWORD</label>
        <input type="password" placehonder="enter the password" name="psd"><br><br>
        <input type="submit" name="sub" value="sumbit">
    </form>
    
    
</body>
</html>
<?php
    if (isset($_POST['sub'])) {
        $uname = $_POST['un'];
        $password = $_POST['psd'];
        //echo "<script>alert('hello');</script>";
        if ($uname == "")
            echo "Enter a valid user name<br>";
        if ($password == "" )
            echo "password cannot be null<br>";
            else if(preg_match('@[A-Z]@', $password)!=1 || preg_match('@[a-z]@', $password)!=1 || preg_match('@[0-9]@', $password)!=1){
                            echo "Not in priscribed format";}
          $conn=mysqli_connect("localhost","root","","tableno1");
           if($conn)
            {
                echo "connected successfully";
                echo "<br>";
            }              
           else {
               echo "error";
               echo "<br>";
           }     
           $query="INSERT INTO login(username,password)VALUES('$uname','$password')";
           if(mysqli_query($conn,"$query"))
            {
                echo "successfully connected";
                echo "<br>";
            }               
           else {
               echo "insertion failed";
               echo "<br>";
           }  
          $search="SELECT * FROM login"; 
          $data=mysqli_query($conn,"$search");

       while($res=mysqli_fetch_assoc($data))
        {
            
         echo $res['username'],' ';
         echo $res['username'],' ';

        }   
        }
    ?>
