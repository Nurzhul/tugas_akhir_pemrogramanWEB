<?php 
session_start();
include "../koneksi.php";
$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
 if ($_POST["captcha_code"] == $_SESSION["captcha_code"]) {
                $login = mysqli_query($con, $sql);
                $ketemu = mysqli_num_rows($login);
                $r = mysqli_fetch_array($login);

                if ($ketemu > 0) {
                    $_SESSION['username'] = $r['username'];
                    $_SESSION['level'] = $r['level'];

                    echo "Username =", $_SESSION['username'], "<br>";
                    echo "Level =", $_SESSION['level'], "<br><br>";

                    header("Location: ../proses/home2.php");
                } else {
                    echo "<center>Login gagal! username & password tidak benar<br>";
                    echo "<a href=../login.php><b>ULANGI LAGI</b></a></center>";
                }
            } else {
                echo "<center>Login gagal! Captcha tidak sesuai<br>";
                echo "<a href=../login.php><b>ULANGI LAGI</b></a></center>";
            }

            mysqli_close($con);
?>
