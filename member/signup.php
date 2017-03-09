<!DOCTYPE html>
<html>
<head>
<title> register page </title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>
<form name="signup_form" method="post" action="./signup_check.php" class="form-horizontal">
		<div class="page-header">
			<h1>&nbsp;회원가입-Register</h1>
		</div>	
<p class="bg-danger">※ 모든 입력항목은 필수항목입니다</p>		
			<div class="join-group" >
				<div class="form-group">
					<label class="control-label col-sm-3" for="user_id">아이디</label>
					   <div class="col-sm-4">
						  <input type="text" class="form-control" id="user_id" name="user_id">
					</div>
			    </div>
				
				<div class="form-group">
					<label class="control-label col-sm-3">비밀번호</label>
					   <div class="col-sm-4">
						<input type="password" class="form-control" id="user_pass" name="user_pass" placeholder="비밀번호는 4자리 이상"/>
					</div>
				</div>
					
				<div class="form-group">
					<label class="control-label col-sm-3">비밀번호확인</label>
					   <div class="col-sm-4">
						<input type="password" class="form-control" id="user_pass2" name="user_pass2">
					</div>
				</div>
				
					<div class="form-group">
					<label class="control-label col-sm-3">이름</label>
					   <div class="col-sm-4">
						<input type="text" class="form-control" id="user_name" name="user_name">
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-sm-3">이메일주소</label>
					   <div class="col-sm-4">
						<input type="text" class="form-control" id="user_email" name="user_email">
					</div>
				</div>
				
			<div style="text-align:center;">
					<input class="btn btn-success" type="submit" value="회원가입">
			</div>
		</div>
				
     </form>   

</body>
</html>