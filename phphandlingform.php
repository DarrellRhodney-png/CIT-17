<!DOCTYPE html>
<html>
<head>
  <title>PHP Exercises</title>
  <style>
    body {
      background-color: gray;
      color: white;
      font-family: Arial;
      padding: 20px;
    }
    form {
      background-color: #5c5c5c;
      padding: 15px;
      margin-bottom: 25px;
      border-radius: 8px;
    }
    input {
      margin: 5px 0;
      padding: 5px;
      width: 95%;
    }
    input[type=submit] {
      width: auto;
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 8px 15px;
      cursor: pointer;
    }
    h2 {
      text-align: center;
      margin-bottom: 40px;
    }
  </style>
</head>
<body>

<h2>PHP Exercises with Forms</h2>

<!-- 1 -->
<form method="post">
<b>1. Introduce Yourself</b><br>
Name: <input type="text" name="name"><br>
Age: <input type="number" name="age"><br>
Favorite Color: <input type="text" name="color"><br>
<input type="submit" name="intro" value="Show">
</form>
<?php
if(isset($_POST['intro'])){
  $name = $_POST['name'];
  $age = $_POST['age'];
  $color = $_POST['color'];
  echo "Hi, I’m $name. I’m $age years old and my favorite color is $color.<hr>";
}
?>

<!-- 2 -->
<form method="post">
<b>2. Simple Math</b><br>
Enter first number: <input type="number" name="num1"><br>
Enter second number: <input type="number" name="num2"><br>
<input type="submit" name="math" value="Calculate">
</form>
<?php
if(isset($_POST['math'])){
  $a = $_POST['num1'];
  $b = $_POST['num2'];
  if ($b == 0) {
    echo "Cannot divide by zero.<hr>";
  } else {
    echo "Sum: ".($a+$b)."<br>";
    echo "Difference: ".($a-$b)."<br>";
    echo "Product: ".($a*$b)."<br>";
    echo "Quotient: ".($a/$b)."<hr>";
  }
}
?>

<!-- 3 -->
<form method="post">
<b>3. Rectangle Area & Perimeter</b><br>
Length: <input type="number" name="length"><br>
Width: <input type="number" name="width"><br>
<input type="submit" name="rect" value="Compute">
</form>
<?php
if(isset($_POST['rect'])){
  $l = $_POST['length'];
  $w = $_POST['width'];
  echo "Area = ".($l*$w)."<br>";
  echo "Perimeter = ".(2*($l+$w))."<hr>";
}
?>

<!-- 4 -->
<form method="post">
<b>4. Temperature Converter</b><br>
Enter Celsius: <input type="number" name="celsius"><br>
<input type="submit" name="temp" value="Convert">
</form>
<?php
if(isset($_POST['temp'])){
  $c = $_POST['celsius'];
  $f = ($c*9/5)+32;
  echo "$c °C = $f °F<hr>";
}
?>

<!-- 5 -->
<form method="post">
<b>5. Swapping Variables</b><br>
X: <input type="number" name="x"><br>
Y: <input type="number" name="y"><br>
<input type="submit" name="swap" value="Swap">
</form>
<?php
if(isset($_POST['swap'])){
  $x = $_POST['x'];
  $y = $_POST['y'];
  $temp = $x;
  $x = $y;
  $y = $temp;
  echo "After swapping → X = $x, Y = $y<hr>";
}
?>

<!-- 6 -->
<form method="post">
<b>6. Salary Calculator</b><br>
Basic Pay: <input type="number" name="basic"><br>
Allowance: <input type="number" name="allowance"><br>
Deduction: <input type="number" name="deduction"><br>
<input type="submit" name="salary" value="Compute">
</form>
<?php
if(isset($_POST['salary'])){
  $net = $_POST['basic'] + $_POST['allowance'] - $_POST['deduction'];
  echo "Net Salary = ₱$net<hr>";
}
?>

<!-- 7 -->
<form method="post">
<b>7. BMI Calculator</b><br>
Weight (kg): <input type="number" step="0.01" name="weight"><br>
Height (m): <input type="number" step="0.01" name="height"><br>
<input type="submit" name="bmi" value="Compute">
</form>
<?php
if(isset($_POST['bmi'])){
  $bmi = $_POST['weight'] / ($_POST['height'] * $_POST['height']);
  echo "Your BMI is ".round($bmi, 2)."<hr>";
}
?>

<!-- 8 -->
<form method="post">
<b>8. String Manipulation</b><br>
Enter a sentence: <input type="text" name="sentence"><br>
<input type="submit" name="string" value="Show">
</form>
<?php
if(isset($_POST['string'])){
  $s = $_POST['sentence'];
  echo "Characters: ".strlen($s)."<br>";
  echo "Words: ".str_word_count($s)."<br>";
  echo "Uppercase: ".strtoupper($s)."<br>";
  echo "Lowercase: ".strtolower($s)."<hr>";
}
?>

<!-- 9 -->
<form method="post">
<b>9. Bank Account</b><br>
Balance: <input type="number" name="balance"><br>
Deposit: <input type="number" name="deposit"><br>
Withdraw: <input type="number" name="withdraw"><br>
<input type="submit" name="bank" value="Compute">
</form>
<?php
if(isset($_POST['bank'])){
  $final = $_POST['balance'] + $_POST['deposit'] - $_POST['withdraw'];
  echo "Final Balance = ₱$final<hr>";
}
?>

<!-- 10 -->
<form method="post">
<b>10. Grading System</b><br>
Math: <input type="number" name="math"><br>
English: <input type="number" name="english"><br>
Science: <input type="number" name="science"><br>
<input type="submit" name="grade" value="Check">
</form>
<?php
if(isset($_POST['grade'])){
  $math = $_POST['math'];
  $eng = $_POST['english'];
  $sci = $_POST['science'];
  $avg = ($math + $eng + $sci) / 3;

  echo "Average: ".round($avg,2)."<br>";

  if($avg >= 75){
    echo "Status: PASSED<hr>";
  } else {
    echo "Status: FAILED<hr>";
  }
}
?>

</body>
</html>


