<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Welcome, <?= session()->get('username') ?></h2>
        <a href="/auth/logout">Logout</a>
    </div>
</body>
</html>
