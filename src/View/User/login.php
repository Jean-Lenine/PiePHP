<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<form method="POST" action="../../../index.php">
  <div class="container">
    <h1>Connexion</h1>
    <label for="mail">Email</label>
    <input type="text" placeholder="Enter Email" name="mail" id="mail" required>

    <label for="psw">Password</label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
</form>
<pre>
<?php
var_dump($_POST, $_GET, $_SERVER);
?>
</pre>
</body>
</html>