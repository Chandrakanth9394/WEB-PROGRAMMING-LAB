<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cricket</title>
</head>
<body>
    <?php
    $players=array("Kohli","Dhoni","Sachin","harbhajan","Sehwag","gambhir","yuvraj","Shami","Bumarah","Hardhik");
    echo"<table border='1' width='180'><tr><th><Number></th><th>Players</th></tr>";
    foreach($players as $i=>$m)
     {
       echo "<tr><td>$i</td><td>$m</td></tr>";
     }
echo "<table>";
?>
</body>
</html>
