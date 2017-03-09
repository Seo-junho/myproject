<!DOCTYPE html>
<?php
session_start();
?>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<link href="css/main.css" rel="stylesheet">
	    <title>실습용</title>
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
      <a class="navbar-brand" href="#">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li><a href="board/list.php">게시판</a></li>
        <li><a href="test/index.html">작업용</a></li>
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
                echo '<font class="session_id">';
				echo $_SESSION['user_id'];
				echo '님 로그인 되었습니다. </font>'; 
				?></li>
				<li>
				<?php
                echo '<a href="member/logout.php">로그아웃</a>'; }
                ?>
				</li>
        <li><a href="member/signup.php">회원가입</a></li>
		<li><a href="member/login.php">로그인</a></li>
      </ul>
    </div>
  </div>
</nav>
<center>
<h3>아직 회원이 아니신가요? 우측 상단에 회원가입 버튼을 눌러서 회원으로 가입하세요.</h3>
</center>
<!-- header 영역 -->
<div id="myCarousel" class="carousel slide">
  <ol class="carousel-indicators">
   <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
   <li data-target="#myCarousel" data-slide-to="1"></li>
   <li data-target="#myCarousel" data-slide-to="2"></li>
   <li data-target="#myCarousel" data-slide-to="3"></li>
   <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>
  <!-- 회전광고판 항목 -->
  <center>
 <div class="carousel-inner" >
    <div class="active item"><img src="images/1.jpg"></div>
    <div class="item"><img src="images/2.jpg"></div>
    <div class="item"><img src="images/3.jpg"></div>
    <div class="item"><img src="images/4.jpg"></div>
	<div class="item"><img src="images/5.jpg"></div>
 </div>
 </center>
 <!-- 회전광고판 탐색 -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>
<br>
<br>




  </body>
</html>