<?php
	 unset($_SESSION['usuario']);
	 session_destroy();
	 header('Location: login.html');
?>