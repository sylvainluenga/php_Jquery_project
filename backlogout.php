<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['fullname']);
?>
<script language="javascript">
	alert("System Log In Session Successfully Ended..Thank You");
window.location="banklogin.php";
</script>