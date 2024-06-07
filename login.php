<!DOCTYPE html>
<html>
<style>
    .log {
        border-style: solid;
        border-color: black;
        border-width: 1px;
    }
    .b1 {
        background-color:aquamarine;
    }
    .c1 {
        margin-top: 50px;
    }
    .img {
        margin-top: 50px;
        width: 200px;
        height: 150px;
    }
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="gaya.css">
    
</head>

<body class="b1">
    <center><img src="img/Hz_logo.png" class="img"></center>
    <center class="c1">
        
    <form action="proses/home.php" method="post">
        <table class="log">
            <tr>
            <td colspan="2"> <center> <h2>Login</h2></center> </td>
            </tr>
            <tr>
                <td>Username</td>
                <td> : <input name='username' type='text'></td>
            </tr>
            <tr>
                <td>Password</td>
                <td> : <input name='password' type='password'></td>
            </tr>
            <tr>
                <td>Captcha<br>
                    <img src='captcha.php' />
                </td>
                <td> : <input name='captcha_code' type='text'></td>
            </tr>
            <tr>
                <td colspan=2><input type='submit' value='LOGIN'></td>
            </tr>
        </table>
        <br>
        <p>Tidak memiliki akun  ? <a href= daftar.php> daftar dulu </a></p>
    </center>
    
    </form>
</body>

</html>