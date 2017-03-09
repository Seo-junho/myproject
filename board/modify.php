<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/preset.php';
?>
<?php
if(isset($doc_idx)==false) {
    echo '글번호가 지정되지 않았습니다.';
    exit();
}

$q = "SELECT * FROM board WHERE doc_idx = $doc_idx";
$result = $mysqli->query($q);
$data = $result->fetch_array();

?>
<html>
<head>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
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

<h2>글 수정</h2>
<hr>
<form name ="modify_form" method = "POST" action = "./modify_check.php">
<input type="hidden" name="idx" value="<?php echo $doc_idx ?>">
<table>
    <tr>
        <td>
    제목
    </td>
    <td>
            <input type ="text" name = "subject" size ="90" value="<?php echo $data['subject'];?>" class="form-control">
    </td>
    </tr>
    <tr>
        <td>
            내용
    </td>
    <td>
            <textarea name="content" cols="100" rows="10" class="form-control"><?php echo $data['content'];?></textarea>
    </td>
    </tr>
</table>

    <input type = "submit" value = "저장" class="btn btn-default">
<button type="button" class="btn btn-default">
    <?php 
    echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/board/list.php">목록</a>';
    ?>
</button>
</form>

</body>
</html>