<?php
require_once 'BusinessPerson.php';

$bp = new BusinessPerson('よし','前田');
$bp->work();
$bp->show();
?>