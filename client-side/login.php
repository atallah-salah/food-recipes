<div class="container loginForm  background-container">
  <h2>Login</h2>
  <form action="/">
    <div class="form-group">
      <input type="email" class="form-control" id="email" placeholder="Enter your email..." name="email" required>
    </div>
    <div class="form-group">
      <input type="password" class="form-control" id="password" placeholder="Enter your password..." name="password" required>
    </div>
    <div class="checkbox">
    </div>
    <button type="submit" class="btn greenBtn">LOGIN</button>
  </form>
  <label class="notReg">Not registered? </label><a href="" data-toggle="modal" data-target="#signUp"> Create account</a>
</div>
<br>
<?php
// $error=0;
// function Login(){
//   include "server-side/config.php";
//
//   $email = $_POST['email'];
//   $password =  md5($_POST['password']);
//
//   $query = mysqli_query($connect,"SELECT * FROM users WHERE email = '$_POST[email]' AND password='$password'");
//   $result = mysqli_query($query);
//   $count = mysqli_num_rows($result);
//
//   if ($count == 0) {
// 	echo '<div class="container alert alert-danger">Wrong email or password</div>';
// } else {
//   session_start();
//  $_SESSION['user'] = $id;
//  // mysqli_query($connect,"SELECT id FROM users WHERE email =$email");
// echo '<div class="container alert alert-success">
//  <strong>Success!</strong> Your registration is completed.</div>';
//  // header("Location: http://www.fb.com/");
// }
// }
//   $query = mysqli_query($connect,"SELECT * FROM users WHERE email = '$_POST[email]'");
//   if(!$row = mysqli_fetch_array($query))
//   {
//     if($error===0){
//     Login();
//   }
//   }
//   else
//   {
//     $error++;
//     echo '
// <div class="container alert alert-danger">
// This email is not registered.</div>';
//   }
 ?>
