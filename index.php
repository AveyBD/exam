<!doctype html>
<html lang="en">
<head>

</head>
<body>
<script>
    function validation() {
        var x = document.forms["login"]["username"].value;
        if(x == ""){
            alert("Name must be filled out");
            return false;
        }

    }
</script>

<form name="login" id="login" action="loginc.php" method="post" onsubmit="return validation()">
    <label for="username">User Name</label>
    <input type="text" name="username">
    <label for="passowrd">Password</label>
    <input type="password" name="password" placeholder="Password">
    <button type="submit" value="Login" name="button">Login</button>
</form>
</form>

</body>
</html>