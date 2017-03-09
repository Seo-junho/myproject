<!DOCTYPE html>
<?php
session_start();
require_once '../preset.php';

if($_SESSION['is_logged']!='YES') { 

echo "<script>alert('로그인 후 이용해주세요');</script>"; // 로그인 경고창을 띄운후 메인페이지로 이동
echo "<script>document.location.href='../index.php'</script>";
} 


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
                echo '<font class="session_id">';
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
<br>
<?php
$q = "SELECT * FROM board";
$result = $mysqli->query( $q);
$total_record = $result->num_rows;


?>
 <h3>비회원일 경우에 작성하신 글은 인덱스가 '0' 으로 표시됩니다.</h3>
 <p>비회원으로 작성하실 경우에 글,수정삭제가 불가능합니다.</p>
 <br><br>
	&nbsp; <a href="write.php"><button type="button" class="btn btn-default">글쓰기</button></a>
	 
<?php if($total_record==0) :?>
    글이 없습니다.
<?php else : ?>
<?php
if( isset($page) && $page!='') {
    $now_page = $page;
}
else {
    $now_page = 1;
}

$record_per_page = 5;
$page_per_block = 10;

$now_block = ceil($now_page / $page_per_block);

$start_record = $record_per_page*($now_page-1);
$record_to_get = $record_per_page;

if( $start_record+$record_to_get > $total_record) {
  $record_to_get = $total_record - $start_record;
}

$q = "SELECT * FROM board WHERE 1 ORDER BY doc_idx DESC LIMIT $start_record, $record_to_get";
$result = $mysqli->query($q);
if($result==false) {
    
}
else {
    
}

?>

<table class="table">
    <thead>
        <th>글번호</th>
        <th>제목</th>
        <th>작성자 인덱스</th>
        <th>등록일시</th>
    </thead>
<?php while($data = $result->fetch_array()) :?>
    <tr>
        <td><?php echo $data['doc_idx']?></td>
<td><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/board/view.php?doc_idx=<?php echo $data['doc_idx']; ?>" ><?php echo $data['subject']?></a></td>

        <td><?php echo $data['idx']?></td>
        <td><?php echo $data['reg_date']?></td>
    </tr>
    
<?php endwhile ?>
</table>

<div class="pagination">
    <ul>
<?php
$total_page = ceil($total_record / $record_per_page);
$total_block = ceil($total_page / $page_per_block);

if(1<$now_block ) {
  $pre_page = ($now_block-1)*$page_per_block;
  echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/board/list.php?page='.$pre_page.'">이전</a>';

}

$start_page = ($now_block-1)*$page_per_block+1;
$end_page = $now_block*$page_per_block;
if($end_page>$total_page) {
  $end_page = $total_page;
}

?>
    
<?php for($i=$start_page;$i<=$end_page;$i++) :?>
    <li><a href="./list.php?id=<?php echo $id ?>&page=
	<?php echo $i; ?>"><?php echo $i; ?></a></li>
<?php endfor?>
</ul>
<?php
if($now_block < $total_block) {
  $post_page = ($now_block)*$page_per_block+1;
  echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/board/list.php?page='.$post_page.'">다음</a>';
}

?>
</div><!-- .pagination --> 

        
<?php endif?>
        