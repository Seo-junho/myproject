<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/preset.php';
?>
<?php
$_SESSION['is_logged'] = 'NO';
$_SESSION['user_id'] = '';
$_SESSION['idx'] = '';

session_unset($_SESSION['user_id']);
session_unset($_SESSION['idx']);


$prevPage = $_SERVER['HTTP_REFERER'];
// 변수에 이전페이지 정보를 저장

header('location: http://highschool.osquaredev.com');
// 페이지 이동
exit();
?> 