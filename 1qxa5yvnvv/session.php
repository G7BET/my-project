<?php
if (!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
	echo '<script>top.location="login.php";</script>';
}
?>