<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <?php if(isset($validation)):?>
            <div class="error">
                <?= $validation->listErrors() ?>
            </div>
        <?php endif;?>
        <form action="/auth/store" method="post">
            <label>Username</label>
            <input type="text" name="username" /><br/>
            <label>Email</label>
            <input type="text" name="email" /><br/>
            <label>Password</label>
            <input type="password" name="password" /><br/>
            <label>Confirm Password</label>
            <input type="password" name="password_confirm" /><br/>
            <button type="submit">Register</button>
            <a href="/auth/login">Already have an account? Login</a>
        </form>
    </div>
</body>
</html>
