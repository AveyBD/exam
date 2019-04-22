<?php
setcookie("name", "John Watkin", time()+3600, "/","", 0);
setcookie("age", "36", time()+3600, "/", "",  0);
?>
<html>

<head>
    <title>Setting Cookies with PHP</title>
</head>

<body>
<?php echo "Set Cookies"?>
<?php
echo $_COOKIE["name"]. "<br />";
echo $_COOKIE["age"] . "<br />";

?>
</body>

</html>