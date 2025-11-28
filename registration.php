<?php
include_once 'include/class.user.php';
$user = new User();
// Checking for user logged in or not
/*if (!$user->get_session())
{
   header("location:index.php");
}*/
if (isset($_POST['submit'])) {
  extract($_POST);
  $register = $user->reg_user($fullname, $uname, $upass, $uemail);
  if ($register) {
    // Registration Success
    echo "<div style='text-align:center'>Registration successful <a href='login.php'>Click here</a> to login</div>";
  } else {
    // Registration Failed
    echo "<div style='text-align:center'>Registration failed. Email or Username already exits please try again.</div>";
  }
}
?>
<?php include 'include/header.php'; ?>

<div class="card p-4" style="width: 100%; max-width: 500px;">
  <div class="card-body">
    <h2 class="text-center mb-4 font-weight-bold">Create Account</h2>
    <form action="" method="post" name="reg" id="registerForm">
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name">
        <label for="fullname">Full Name</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="uname" name="uname" placeholder="Username">
        <label for="uname">Username</label>
      </div>
      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="uemail" name="uemail" placeholder="Email Address">
        <label for="uemail">Email Address</label>
      </div>
      <div class="form-floating mb-3">
        <input type="password" class="form-control" id="upass" name="upass" placeholder="Password">
        <label for="upass">Password</label>
      </div>
      <div class="d-grid gap-2 mb-3">
        <button class="btn btn-primary btn-lg" type="submit" name="submit">Register</button>
      </div>
      <div class="text-center">
        <p class="mb-0">Already have an account? <a href="login.php">Login here</a></p>
      </div>
    </form>
  </div>
</div>

<?php include 'include/footer.php'; ?>