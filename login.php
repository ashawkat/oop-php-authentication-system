<?php
session_start();
include_once 'include/class.user.php';
$user = new User();

if (isset($_POST['submit'])) {
  extract($_POST);
  $login = $user->check_login($emailusername, $password);
  if ($login) {
    // Registration Success
    header("location:home.php");
  } else {
    // Registration Failed
    echo 'Wrong username or password';
  }
}
?>
<?php include 'include/header.php'; ?>

<div class="card p-4" style="width: 100%; max-width: 400px;">
  <div class="card-body">
    <h2 class="text-center mb-4 font-weight-bold">Login</h2>
    <form action="" method="post" name="login" id="loginForm">
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="emailusername" name="emailusername" placeholder="Username or Email">
        <label for="emailusername">Username or Email</label>
      </div>
      <div class="form-floating mb-3">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        <label for="password">Password</label>
      </div>
      <div class="d-grid gap-2 mb-3">
        <button class="btn btn-primary btn-lg" type="submit" name="submit">Sign In</button>
      </div>
      <div class="text-center">
        <p class="mb-0">Don't have an account? <a href="registration.php">Register here</a></p>
      </div>
    </form>
  </div>
</div>

<?php include 'include/footer.php'; ?>