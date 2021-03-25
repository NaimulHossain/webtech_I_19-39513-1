<?php require_once("./inc/deps.php"); ?>
<?php header_section("Login"); ?>
<?php
if (isset($_SESSION['login']) && $_SESSION['login']) {
    header("Location: dashboard.php");
    exit();
}

$error_message = "";
if (isset($_GET['errors'])) {
    if ($_GET['errors'] == 'notlogin')
        $error_message = "Invalid Email and Passowrd";
}
?>
<style>
body {
  background-image: url('img_pic.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<main class="clearfix">
    <?php if (isset($_GET['errors']) && !empty($error_message)) : ?>
        <div class="errors-list">
            <table>
                <tbody>
                    <tr>
                        <td>!! <?php echo $error_message; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
    <form action="./inc/login.inc.php" method="post" autocomplete="off">
        <table>
            <tbody>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td><input class="inp" id="email" type="email" name="email" required></td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td><input class="inp" id="password" type="password" name="password" required></td>
                </tr>
                <tr>
                    <td><input id="remember" type="checkbox" name="remember"></td>
                    <td><label for="remember">Remember me</label></td>
                </tr>
                <tr>
                    <td><button class="btn" id="submit" type="submit" name="login">Login</button></td>
                    <td><a href="./forgetpassword.php">Forget Your Password?</a></td>
                </tr>
            </tbody>
        </table>
    </form>
</main>
<?php footer_section(); ?>