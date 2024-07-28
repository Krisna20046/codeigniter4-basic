<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <?php if(session()->getFlashdata('msg')):?>
            <div class="error">
                <?= session()->getFlashdata('msg') ?>
            </div>
        <?php endif;?>
        <form action="/auth/authenticate" method="post">
            <label>Email</label>
            <input type="text" name="email" /><br/>
            <label>Password</label>
            <input type="password" name="password" /><br/>
            <button type="submit">Login</button>
            <a href="/auth/register">Don't have an account? Register</a>
        </form>
    </div>
</body>
</html>
