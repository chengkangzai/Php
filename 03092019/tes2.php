<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="tes2.php" method="POST">
    <label for="Marks"> Marks</label>
        <input type="number" name="Marks" id="">
    <br>
    <label for="Level"> Level</label>
    <select name="Level" id="lvl">
        <option value="Undergraduate">Undergraduate</option>
        <option value="HND">HND</option>
        <option value="Masters">Masters</option>
    </select>
    <br>
    <input type="submit" value="submit">
    </form>

<?php
// I am the guy that using own server so error shown thus no isset function use.
 $level = $_POST['Level'];
 $score = $_POST['Marks'];
  switch ($level) {
     case 'Undergraduate':
         if ($score>=70) {
             echo "<h3>1st Class Honour</h3>";
         }
         elseif ($score>=60) {
             echo "<h3>Upper Class Honour</h3>";
         }
         elseif ($score>=50) {
             echo "<h3>Lower Class Honour</h3>";
         }
         elseif ($score>40) {
             echo  "<h3>Third Class Honour</h3>";
         }
         else {
             echo "<h3>Fail </h3>";
         }
         break;
     
     case 'HND':
         if ($score>=70) {
             echo "<h3>Grade Point 13-15 </h3>";
         }
         elseif ($score>=53) {
             echo "<h3>Grade Point 8-12 </h3>";
         }
         elseif ($score>=40) {
             echo "<h3>Grade Point 4-7</h3>";
         }
         else {
             echo "<h3>Grade Point 1-3</h3>";
         }
         break;
     case 'Masters':
         if ($score>=70) {
             echo "<h3>1st Class Honour</h3>";
         }
         elseif ($score>=60) {
             echo "<h3>Upper Class Honour</h3>";
         }
         elseif ($score>=50) {
             echo "<h3>Lower Class Honour</h3>";
         }
         elseif ($score>40) {
             echo  "<h3>Third Class Honour</h3>";
         }
         else {
             echo "<h3>Fail </h3>";
         }
         break;
 }
 

?>
</body>
</html>