<?php include 'inc/header.php' ?>
<?php include 'inc/login_inc.php' ?>
            <H2>LOG_IN</H2>
            <form action="inc/login_inc.php" method="post">
                <label for="username">Username</label>
                <input type="text" name='username' id="username" placeholder="Your Username">
                <label for="password">Password</label>
                <input type="password" name='password' id="password" placeholder="Your Password">
                <button type="submit" name='submit'>Log In</button>
            </form>
        </div>
    </div>
</body>
</html>