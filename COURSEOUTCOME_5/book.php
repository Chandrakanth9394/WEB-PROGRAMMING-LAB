<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
</head>
<body>
<form action="" method="POST">  
<table border="1" >
        <tr>
           <td> Accession number:</td> 
           <td><input type="number" name="number" placeholder="enter the Accession number"></td>
        </tr>
        <tr>
            <td>Title:</td>
            <td><input type="text" name="title" placeholder="enter the title"</td>
        </tr> 
        <tr>
            <td>Author:</td>
            <td><input type="text" name="author" placeholder="enter the author"</td>
        </tr>
        <tr>
            <td>Edition:</td>
            <td><input type="text" name="edition" placeholder="enter the edition"</td>
        </tr>
        <tr>
            <td>Publisher:</td>
            <td><input type="text" name="publisher" placeholder="enter the publisher"</td>
        </tr>       
    </table>
    <br>
    <input type="submit" name="submit" value="submit">
</form>
<form action="" method="POST">
    <table align="center" border="1">
        <tr>
            <td>Enter the book title: </td>
            <td><input type="text" name="book" placeholder="enter the book title" ></td>
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
     $Accession_number=$_POST['number'];
     $Title=$_POST['title'];
     $Author=$_POST['author'];
     $Edition=$_POST['edition'];
     $Publisher=$_POST['publisher'];
     $conn=mysqli_connect("localhost","root","","book");
     if ($conn) 
       {
          echo "connected  successfully<br>";
       }
     else
       {
           echo "not connected";  
       } 
      $query="INSERT INTO books(accessionno,title,author,edition,publisher)VALUES('$Accession_number','$Title','$Author','$Edition','$Publisher')";
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
       $book=$_POST['book']; 
       $conn=mysqli_connect("localhost","root","","book");
       $search="SELECT * FROM books where Title ='$book' ";
       $result=mysqli_query($conn,"$search");

        while($res=mysqli_fetch_assoc($result))
          {
            echo '<table border =1><tr>
            <td>'.$res['accessionno'].'</td>
            <td>'.$res['title'].'</td>
            <td>'.$res['author'].'</td>
            <td>'.$res['edition'].'</td>
            <td>'.$res['publisher'].'</td>
            </tr></table>';
          }
      }
      ?>

