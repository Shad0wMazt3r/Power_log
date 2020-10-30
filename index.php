<?php
if(isset($_POST['log']))
{
$fp = fopen('log_data.txt', 'a');
fwrite($fp, $_POST['log']);  
fclose($fp);  
echo "Thanks for contributing to the developement of Power";  
die();
}
?>
<form action="index.php" method="POST">
<textarea  name="log" rows="4" cols="50">
  Please paste your log.txt here
  </textarea>
  <br><br>
  <input type="submit" value="Submit">
</form>
