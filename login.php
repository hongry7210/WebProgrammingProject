<?php
session_start();
?>
<html>

<head>
  <title>Please Log In</title>
</head>

<body>
<?php include 'header.php'; ?>
  <form method="post" action="./movie1.php">
    <p>Enter your username:
      <input type="text" name="user" />
    </p>
    <p>Enter your password:
      <input type="password" name="pass" />
    </p>
    <p>
      <input type="submit" name="submit" value="Submit" />
    </p>
  </form>
</body>

</html>