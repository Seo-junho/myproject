<?php
require_once '../preset.php';
?>
<?php
session_start();
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
<div style="height:250px"></div>
<div style="margin:0 auto; width:660px; position:relative;">
<div class="container">
<table class="table table-bordered" style="width:600px">
    <tr>
        <td style="width:100px">
    제목:
    </td>
    <td style="width:300px">
            <?php echo $data['subject']; ?>
    </td>
    </tr>
    <tr>
        <td style="width:100px">
    작성자:
    </td>
    <td style="width:300px">
            <?php echo $data['idx']; ?>
    </td>
    </tr>
    <tr>
        <td style="width:100px">
            내용:
    </td>
    <td style="width:300px">
            <?php echo $data['content']; ?>
    </td>
    </tr>
</table> 
</div>
&nbsp;
<?php
    echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/board/list.php" class=""btn btn-default btn-lg active" role="button">목록</a>';
?>
&nbsp;
<?php
        if( $_SESSION['idx']==$data['idx']) {
        echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/board/modify.php?doc_idx='.$doc_idx.'" >수정</a>';
        }
?>
&nbsp;
<?php
        if( $_SESSION['idx']==$data['idx']) {
        echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/board/delete.php?doc_idx='.$doc_idx.' class="btn btn-default btn-lg active"">삭제</a>';
        }
?>

<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = '//junho.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

</body>
</html>



	