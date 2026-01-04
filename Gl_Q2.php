# Guideline Q2

<?PHP
$c = $a = $b = 0;
if (isset($_POST["num1"]))
   $a = $_POST["num1"];
if (isset($_POST["num2"]))
   $b= $_POST["num2"];
$c=$a+$b;

echo <<<_END
<html>
<head>
<title>the sum of two numbers</title>
</head>
<h2>Sum of two no.</h2>
<body>

   <form method = "post" action = "Gl_Q2.php">
  First no.:
  <input type = "text" name = "num1" size =15 placeholder = "num1">
  <br><br>
  Second  no.:
 <input type = "text" name = "num2"size =15 placeholder = "num 2">
  <br><br>

  Sum :
  <input type = "text" name = "Answer" size = 15  value = $c >
  <input type = "Submit"  value = "Evaluate">
  <br><br>


</body>
</html>
_END;
echo "Sum of two no. $c";
?>






