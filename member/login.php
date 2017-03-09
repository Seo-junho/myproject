<!DOCTYPE html>
<html>
<head>
<title> login page </title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="../js/bootstrap.min.js"></script>
	
</head>
<body>
<div class="container">
    <div class="row">
		<div class="span12">
			<form class="form-horizontal" action='./login_check.php' method="POST">
			  <fieldset>
			    <div id="legend">
			      <legend class="">로그인</legend>
			    </div>
			    <div class="control-group">
			      <!-- Username -->
			      <label class="control-label"  for="username">아이디</label>
			      <div class="controls">
			        <input type="text" id="user_id" name="user_id" placeholder="" class="input-xlarge">
			      </div>
			    </div>
			    <div class="control-group">
			      <!-- Password-->
			      <label class="control-label" for="password">비밀번호</label>
			      <div class="controls">
			        <input type="password" id="user_pass" name="user_pass" placeholder="" class="input-xlarge">
			      </div>
			    </div>
			    <div class="control-group">
			      <!-- Button -->
			      <div class="controls">
			        <button class="btn btn-success">로그인</button>
			      </div>
			    </div>
			  </fieldset>
			</form>
		</div>
	</div>
</div>
</body>
</html>