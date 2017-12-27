
<?php session_start();
?>
<html>
<body>
<?php
echo "by session".$_SESSION["name1"];
echo "by cookie".$_COOKIE["name"];
?>
</body>
</html>