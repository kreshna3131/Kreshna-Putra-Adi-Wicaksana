<!DOCTYPE html>
<html lang="en">
<?php

session_start();

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username == "kreshnaputra" && $password == "kreshnaputra") {
    // echo ("Username dan Password Benar");
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;

    // print_r($_SESSION);
    echo "Username : " . $username;
    echo "<br>";
    echo "Password : " . $password;
  } else {
    echo ("Cek Username dan Password kembali");
  }
}

?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Login & Session</title>
</head>

<body>
  <form action="" method="post">
    <table>
      <tr>
        <td>Username:</td>
        <td><input type="text" name="username" class="box" placeholder="Input Username"></td>
      </tr>
      <tr>
        <td>Password:</td>
        <td><input type="password" name="password" class="box" placeholder="Input Password"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="submit" value="submit"></td>
      </tr>
    </table>
  </form>
</body>

</html>