<?php
session_start();

include("DBFIles/DBConfig.php");

$_SESSION['LoginID'] = "";
$_SESSION['LoginMail'] = "";
$_SESSION['User Name'] = "";
$_SESSION['CurrentSemester'] = "";
session_unset();
session_destroy();
$_SESSION['ErrMsg'] = "You have successfully logout";
?>
<script language="javascript">
    document.location = "index.php";
</script>