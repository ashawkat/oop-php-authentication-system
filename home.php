<?php
session_start();
include_once 'include/class.user.php';
$user = new User();

$uid = $_SESSION['uid'];

if (!$user->get_session()) {
  header("location:login.php");
}

if (isset($_GET['q'])) {
  $user->user_logout();
  header("location:login.php");
}
?>
<?php include 'include/header.php'; ?>

<div class="card p-5 text-center" style="width: 100%; max-width: 600px;">
  <div class="card-body">
    <h1 class="display-4 mb-4">Welcome!</h1>
    <h2 class="h4 mb-4">Hello, <?php $user->get_fullname($uid); ?></h2>
    <p class="lead mb-4">You have successfully logged in.</p>
    <a href="home.php?q=logout" class="btn btn-danger btn-lg">Logout</a>
  </div>
</div>

<?php include 'include/footer.php'; ?>