<?php
$result = shell_exec("dir {$_GET['param']}");
print $result;
?>