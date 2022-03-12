<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShowRoom Makmur Sejahtera</title>
    <link rel="stylesheet" href="Assets/styleIndex.css">
</head>
<script type="text/javascript">
    if (typeof document.onselectstart!="undefined"){
        document.onselectstart=new Function ("return false");
    }
    else{
        document.onmousedown=new Function ("return false");
        document.onmouseup=new Function ("return true");
    }
</script >
<body>
    <div class="form-login">
        <h3>Login</h3>
        <form action="loginAction.php" method="post">
            <label>
                <input type="text" name="username" placeholder="Username" required autocomplete="off" maxlength="15">
            </label>
            <label>
                <input type="password" name="password" placeholder="Password" required autocomplete="off" maxlength="15">
            </label>
            <input type="submit" name="login" value="Login">
        </form>
    </div>
</body>
</html>