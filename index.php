<!DOCTYPE html>
<html>
<head>
  <title>Axlsky</title>
</head>
<body>
  <form method="post">
    E-mail: <br>
    <input type="email" name="email"><br>
    Password: <br>
    <input type="password" name="psw"><br>
    <input type="submit" name="submit">
    
  </form>
</body>
</html>


<?php
              
if(isset($_POST['textdata']))
{
$data=$_POST['textdata'];
$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}
?>
