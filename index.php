
<?php

$сообщение ="/";

if($_SERVER["REQUEST_METHOD"] == "POST") {
  $сообщение = htmlspecialchars($_POST["сообщение"]);
}

?>

