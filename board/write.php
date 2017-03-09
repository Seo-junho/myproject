<!DOCTYPE html>
<?php
require_once '../preset.php';
?>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
	    <title>오스퀘어</title>
  </head>
  <body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../index.php">Home</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li><a href="list.php">게시판</a></li>
		        <li><a href="#">채팅방</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
	    <li>
		<?php 
		if($_SESSION['is_logged']=='YES') {
                echo '<font color="white">';
				echo $_SESSION['user_id'];
				echo '님 로그인 되었습니다. </font>'; 
				?></li>
				<li>
				<?php
               echo '<a href="../member/logout.php">로그아웃</a>'; }
                ?>
				</li>
        <li><a href="../member/signup.php">회원가입</a></li>
		<li><a href="../member/login.php">로그인</a></li>
      </ul>
    </div>
  </div>
</nav>
<form name ="write_form" method = "POST" action = "write_check.php">
<input type="hidden" name="idx" value="<?php echo $_SESSION['idx'] ?>">
<table>
<h2>글쓰기</h2>
<hr>
    <tr>
        <td>
    제목&nbsp;
    </td>
    <td>
            <input type ="text" name = "subject" size ="100" class="form-control" placeholder="제목을 입력하세요">
    </td>
    </tr>
    <tr>
        <td>
     내용&nbsp;
    </td>
    <td>
            <textarea name="content" class="form-control" cols="100" rows="10" placeholder="내용을 입력하세요"></textarea>
    </td>
    </tr>
</table>

<div>
    &nbsp;<input type = "submit" value = "저장" class="btn btn-default">&nbsp;<input type = "reset" value = "다시쓰기" class="btn btn-default">
</div>
    

</form>