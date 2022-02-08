<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employe</title>
</head>
<body>
<form action="" method="POST">  
<table border="1" >
        <tr>
           <td> employe_id:</td> 
           <td><input type="number" name="a" placeholder="enter the employee id"></td>
        </tr>
        <tr>
            <td>employe_name:</td>
            <td><input type="text" name="b" placeholder="enter the  employe name"</td>
        </tr> 
        <tr>
            <td>job_name:</td>
            <td><input type="text" name="c" placeholder="enter the job name"</td>
        </tr>
        <tr>
            <td>manager_id:</td>
            <td><input type="text" name="d" placeholder="enter the manager id"</td>
        </tr>
        <tr>
            <td>salary:</td>
            <td><input type="number" name="e" placeholder="enter the salary"</td>
        </tr>       
    </table>
    <br>
    <input type="submit" name="submit" value="submit">
</form>
<form action="" method="POST">
    <table align="center" border="1">
        <tr>
            <td>Enter the employe name: </td>
            <td><input type="text" name="employe" placeholder="enter the book title" ></td>
        </tr>
    <br>
    <tr>
      <td>
    <input type="submit" name="search" value="search"></td></tr>
</table>
</form>            
</body>
</html>
<?php
  if(isset($_POST['submit']))
   {
     $employe_id=$_POST['a'];
     $employe_name=$_POST['b'];
     $job_name=$_POST['c'];
     $manager_id=$_POST['d'];
     $salary=$_POST['e'];
     $conn=mysqli_connect("localhost","root","","MCA");
     if ($conn) 
       {
          echo "connected  successfully<br>";
       }
     else
       {
           echo "not connected";  
       } 
      $query="INSERT INTO employe(empid,empname,jobname,managerid,salary)VALUES('$employe_id','$employe_name','$job_name','$manager_id','$salary')";
      if(mysqli_query($conn,"$query"))
        {
            echo "query connection successfull<br>";
        }
      else
        {
             echo "query connection failed<br>";
        }  

   }
   ?>
   <?php
    if (isset($_POST['search']))
      {
       $employe=$_POST['employe']; 
       $conn=mysqli_connect("localhost","root","","MCA");
       $search="SELECT * FROM employe where salary>35000 ";
       $result=mysqli_query($conn,"$search");
       echo "<table border =1 >";
        while($res=mysqli_fetch_assoc($result))
          {
            echo '<tr>
            <td>'.$res['empid'].'</td>
            <td>'.$res['empname'].'</td>
            <td>'.$res['jobname'].'</td>
            <td>'.$res['managerid'].'</td>
            <td>'.$res['salary'].'</td>
            </tr>';
          }
          echo "</table>";
      }
      ?>

