<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Verify</title>
	<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<form action="VerifyCodeCheckTest.php" method="post" accept-charset="utf-8" class="col-lg-3">
		<div class="form-group col-lg-9">
			<img src="./VerifyCodeCreateTest.php" alt="验证码" width="100%" onClick="this.src=this.src+'?'+Math.random();">
		</div>
		<div class="form-group col-lg-9">
			<input type="text" name="VerifyCode" class="form-control" placeholder="请输入验证码">
		</div>
	  	<div class="form-group col-lg-12">
			<button type="submit" class="btn btn-primary">提交</button>
		</div>
	</form>
</body>
</html>
