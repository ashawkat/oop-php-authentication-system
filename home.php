<?php
    session_start();
    include_once 'include/class.user.php';
    $user = new User();

    $uid = $_SESSION['uid'];

    if (!$user->get_session()){
       header("location:login.php");
    }

    if (isset($_GET['q'])){
        $user->user_logout();
        header("location:login.php");
    }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <title>Home</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    </head>

    <body>
        <div id="container" class="container">
            <div id="header">
                <a href="home.php?q=logout">LOGOUT</a>
            </div>
            <div id="main-body">
    			<br/><br/><br/><br/>
    			<h1>
                  Hello <?php $user->get_fullname($uid); ?>
    			</h1>	
            </div>
            <div id="footer"></div>
        </div>
    </body>
</html>
