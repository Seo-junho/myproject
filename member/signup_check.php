<?php
require_once '../preset.php';
?>
<?php

$encrypted_pass = sha1($user_pass);

$q = "INSERT INTO user ( id, pw, name, email ) VALUES ( '$user_id', '$encrypted_pass', '$user_name', '$user_email' )";

$mysqli->query( $q);

$mysqli->close($mysqli);


header('Location: '.$url['root'].'./signup_done.php');

exit();

?>