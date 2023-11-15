<?php
    require_once "config/db.php";

    session_start();

    if(isset($_POST['dangnhap'])){
      $username = $_POST['username'];
      $password = $_POST['password'];
      $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result)>0){
        header("location: index.php?page_layout=danhsach");
        $_SESSION['username'] = $username;
      }
      else{
        echo "Bạn đã nhập sai, vui lòng nhập lại";
      }
    }
 ?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="css/styleLogin.css">
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="login">
      <div class="login__container">
        <h1>Đăng Nhập</h1>
        <form action="login.php" method="post">
          <h5>Email</h5>
          <input type="text" name="username" id="">
          <h5>Password</h5>
          <input type="password" name="password" id=""/> <br>
          <button type="submit" name="dangnhap">Đăng Nhập</button>
        </form>
      </div>
    </div>
  </body>
</html>