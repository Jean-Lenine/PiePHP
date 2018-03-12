<form method="GET" action="/PiePHP/user/login">
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