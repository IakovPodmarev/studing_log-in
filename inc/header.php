
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Log-in</title>
</head>
<body>

    <nav class="nav">
            <div class="wrapper">
                <div class="log-in">STUDING SITE</div>
                <a href="index.php" class="home">HOME</a>
                <?php if(isset($_SESSION['users_id'])){ ?>
                <span><?php echo $_SESSION['users_user_id']?></span>
                <a href="inc/logout_inc.php" class="log_in">LOG-OUT</a>
                <?php }else{?>
                <a href="sign_up.php" class="sign_up">SIGN_UP</a>
                <a href="log_in.php" class="log_in">LOG-IN</a>
                    <?php }?>
            </div>
    </nav>
    <div class="contents">
        <div class="container">