<!--artist logout-->
<?php
session_start();
$_SESSION['login']=="";
session_unset();
$_SESSION['action1']="You have logged out successfully..!";
?>
<script language="javascript">
document.location="signin.php";
</script>
