<?php require_once '../Encode.php'; ?>
<!DOCTYPE html>
<html lang="jp">
<head>
<meta charset="UTF-8" />
    <title>チェックボックス</title>
</head>
<body>
    <table border="1">
    <?php
        foreach($_SERVER as $key => $value) {
            if (mb_strpos($key, 'HTTP_') === 0) {
    ?>
    <tr valign="top">
    <th><?=e($key) ?></th>
    <td><?=e($value) ?></td>
    </tr>
    <?php
        }
    }
    ?>
    </table>
</body>
</html>