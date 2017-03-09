<?php
require_once '../preset.php';
?>
<?php

$reg_date = date("Y-m-d");
$idx = $_SESSION['idx'];

$q = "INSERT INTO board (idx, subject,content,reg_date) VALUES('$idx', '$subject', '$content', '$reg_date')";

$result = $mysqli->query($q);

if ($result==false) {
    $_SESSION['writing_status'] = 'NO';
}
else {
    $_SESSION['writing_status'] = 'YES';
}

$mysqli->close();

header('Location: '.$url['root'].'list.php');
exit();

?> 
