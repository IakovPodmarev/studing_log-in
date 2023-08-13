<?php include 'inc/header.php' ?>
<?php include 'inc/signup_inc.php'?>
            <H2>SIGN UP</H2>
            <form action="inc/signup_inc.php" method="POST">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Username">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Your Email">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Your Password">
                <input type="password" name="password_repeat" id="password_repeat" placeholder="Repeat Password">
                <button type="submit" name='submit'>Sign Up</button>
            </form>
        </div>
    </div>
</body>
</html>