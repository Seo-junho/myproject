<?php
require_once '../preset.php';
$is_logged = $_SESSION['is_logged'];
if($is_logged=='YES') {
    $user_id = $_SESSION['user_id'];
    $message = $user_id . ' 님, 로그인 했습니다.';
}


else {
    $message = '로그인이 실패했습니다.';
}
?>
        login_done.php - 로그인 완료 페이지<br />
        <hr />
		
	
<?php
    echo $message;
?>
    <br>
	<input type="button" value="돌아가기" onClick="history.go(-2)"> 