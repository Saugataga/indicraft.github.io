<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <script></script>
    <title>Sign-In</title>
</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
        </label>
        <label class="logo"><img src="images/indicraftlogo.png" alt="Error : 1"></label>
        <ul>
          <li><a class="active" href="#">Processing</a></li>
          <li><a href="index.html" class="signin">Cancel</a></li>
        </ul>

      </nav>


</nav>
<section class="whole">
<h2 class="title">Sign Up</h2>
<form action="signup.inc.php" method="post">
<div id="inputs">
<div class="field">
  <input type="text" class="form" name="name" placeholder="Fullname...">
</div>
  <br>
  <div class="field">
  <input type="email" class="form" name="email" placeholder="Email...">
</div>
  <br>
  <div class="field">
  <input type="text" class="form" name="uid" placeholder="Username...">
</div>
  <br>
  <div class="field">
  <input type="password" class="form" name="pwd" placeholder="Password...">
</div>
  <br>
  <div class="field">
  <input type="password" class="form" name="pwdrepeat" placeholder="Repeat Password...">
</div>
  <br>
  <div class="field">
  <button type="submit" class="btn" name="submit">Sign-In</button>
  
</div>
<br>
</form>
</div>
</section>


</body>
</html>
