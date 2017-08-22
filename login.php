<?php
/**
 * Created by PhpStorm.
 * User: Sam
 * Date: 22/08/2017
 * Time: 4:51 PM
 */

/**
 * WARNING:
 * This code may not work, and may perhaps be insecure.
 * Use at risk, but this covers the basics of how to actually use OOP.
 */

require('Classes/AuthorizationHandler.php');
$handler = new AuthorizationHandler();

if (isset($_POST['login_user'])) {
	if ($handler->login($_POST['username'], $_POST['username'])) {
		header('Location: http://website.com/dashboard');
	} else {
		?>
        YOU COULD NOT BE LOGGED IN!
		<?php
	}
}
?>

<form action="login.php" method="post">
    <input type="hidden" name="login_user">
    <input type="text" name="username">
    <input type="text" name="password">

    <button type="submit">Login</button>
</form>
