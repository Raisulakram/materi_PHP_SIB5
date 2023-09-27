<form method="POST">
    <label for="">Username</label><br>
    <input type="text" name="username"><br>
    <label for=""></label>Password<br>
    <input type="password"  name="password"><br>
    <input type="submit" name="login" value="login" id="">
</form>

<?php
$username = $_POST ['username'];
$password = $_POST ['password'];
//tampilkan setealah forom di proses
$login = $_POST ['login'];
if (isset($login)){
    echo 'username :'.$username.'<br> Password : '.$password;
}

?>
`