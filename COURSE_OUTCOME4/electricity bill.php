<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity bill</title>
</head>
<body>
<form action="" method="POST">
   <h1 style="background-color: blue; text-align: center;">ELECTRICITY BILL</h1>
   <table>
        <tr>
            <td><label>1.Enter the number of mentor:</label>
            <input type="number" name="num1" placeholder="enter the mentor's number"</td>
        </tr>
        <tr>
        <tr>
             <td><label>2.Enter the units:</label>
             <input type="number" name="num2"  placeholder="enter the units"></td>
        </tr>  
        <tr>
             <td><label> 3.Enter the catagory:</label>
                 <select name="tariff">
                     <option value="select">select</option>
                     <option value="rural">rural</option>
                     <option value="residential">residential</option>
                     <option value="commercial">commercial</option>
                 </select>
            </td>
         </tr>  
         <br>
</table>
<br>
         <input type="submit" name="submit" value="submit">  
</body>
</html>

<?php
if(isset($_POST['submit']))
  {
   $num1=$_POST['num1'];
   $unit=$_POST['num2'];
   $tariff=$_POST['tariff'];
    if($tariff=="rural")
     {
         if($unit>0&&$unit<=50)
          {
           $extra=25;
           $price=(($unit*0.25)+$extra);
          } 
        elseif($unit>51&&$unit<=100)
          {
           $extra=25;
           $price=(($unit*0.50)+$extra);
          }
        elseif($unit>101&&$unit<=200)
         {
           $extra=25;
           $price=(($unit*1.00)+$price);
         }
        elseif($unit>201&&$unit<=300)
         {
           $extra=25;
           $price=(($unit*1.25)+$extra);
         } 
        elseif($unit>301&&$unit<=400)
          {
            $extra=25;
            $price=(($unit*1.50)+$extra);  
          }
        elseif($unit>=401)
        {
            $extra=25;
            $price=(($unit*1.75)+$extra);
        }
   echo "<br> your mentor number is:" .$num1;       
   echo "<br>";
   echo "the units are:" .$unit;
   echo "<br>";
   echo "The extra chargers are:" .$extra;
   echo "<br>";
   echo " the total $unit of units are" .$price;
   echo "<br>";
  }
  if($tariff=="residential")
  {
      if($unit>0&&$unit<=50)
       {
        $extra=35;
        $price=(($unit*0.25)+$extra);
       } 
     elseif($unit>51&&$unit<=100)
       {
        $extra=35;
        $price=(($unit*0.50)+$extra);
       }
     elseif($unit>101&&$unit<=200)
      {
        $extra=35;
        $price=(($unit*1.00)+$price);
      }
     elseif($unit>201&&$unit<=300)
      {
        $extra=35;
        $price=(($unit*1.25)+$extra);
      } 
     elseif($unit>301&&$unit<=400)
       {
         $extra=35;
         $price=(($unit*1.50)+$extra);  
       }
     elseif($unit>=401)
     {
         $extra=35;
         $price=(($unit*1.75)+$extra);
     }
echo "<br> your mentor number is:" .$num1;       
echo "<br>";
echo "the units are:" .$unit;
echo "<br>";
echo "The extra chargers are:" .$extra;
echo "<br>";
echo " the total $unit of units are" .$price;
echo "<br>";
}
if($tariff=="commercial")
     {
         if($unit>0&&$unit<=50)
          {
           $extra=45;
           $price=(($unit*0.25)+$extra);
          } 
        elseif($unit>51&&$unit<=100)
          {
           $extra=45;
           $price=(($unit*0.50)+$extra);
          }
        elseif($unit>101&&$unit<=200)
         {
           $extra=45;
           $price=(($unit*1.00)+$price);
         }
        elseif($unit>201&&$unit<=300)
         {
           $extra=45;
           $price=(($unit*1.25)+$extra);
         } 
        elseif($unit>301&&$unit<=400)
          {
            $extra=45;
            $price=(($unit*1.50)+$extra);  
          }
        elseif($unit>=401)
        {
            $extra=45;
            $price=(($unit*1.75)+$extra);
        }
   echo "<br> your mentor number is:" .$num1;       
   echo "<br>";
   echo "the units are:" .$unit;
   echo "<br>";
   echo "The extra chargers are:" .$extra;
   echo "<br>";
   echo " the total $unit of units are" .$price;
   echo "<br>";
  }
}
?>
