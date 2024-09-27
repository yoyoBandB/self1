<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid" style="background: url(pic/my/myteator網頁-22.png);background-size: 100% 100%;">
		<div class="container-fluid w-100" style="z-index:100;background:#1E6CAE;">
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light">
				  	<div class="container-fluid">
					  	<div class="col">
					  		<img src="pic/my/myteator網頁-16.png" alt="">
					  	</div>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
						    <div class="navbar-nav ">
							    <a class="nav-link active text-warning font-weight-bold" aria-current="page" href="#">最新消息</a>
								<a class="nav-link active text-white font-weight-bold" aria-current="page" href="#">關於我們</a>
								<a class="nav-link active text-white font-weight-bold" aria-current="page" href="#">找師資</a>
								<a class="nav-link active text-white font-weight-bold" aria-current="page" href="#">找工作</a>
								<a class="nav-link active text-white font-weight-bold" aria-current="page" href="#">部落格</a>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</div>
		<div class="row" style="height: 300px;"></div>
		<div class="row mb-3">
			<div class="col-2"></div>
			<div class="col-8">
				<span class="" style="color:#394B6D;font-weight:bold;font-size:35px;">從MYTeacher認識世界各地的人與文化</span><br>
				<span style="color:#394B6D;font-size: 24px;">已累計125874名家教</span>
			</div>
		</div>
		<!-- <div class="row">
			<div class="col-2"></div>
			<div class="col-8" class="rounded-circle">
				<form method="get">
					<div class="row">
						<div class="col" style="position: relative;">
							<input type="text" class="w-100 rounded-pill" style="line-height:2;padding-left: 30px;border:0px;box-shadow: 5px 5px 10px 2px rgba(0.5,0.5,0.5,0.7);" placeholder="輸入英文會話、日文會話">
							<button style="border:0;background:transparent;position: absolute;top: 2px;right: 20px;"><img src="pic/my/myteator網頁-14.png"  alt="" ></button>
						</div>
						<div class="col-1 d-flex justify-content-center">
							<div style="background: white;width: 80px;" class="rounded-pill d-flex justify-content-center">
								<img src="pic/my/myteator網頁-20.png" alt="">
							</div>
						</div>	
					</div>
				</form>
			</div>
		</div> -->
		<div class="row" style="height:50px;"></div>
		<!-- <div class="row justify-content-center">
			<div class="col-1">
				<input type="submit" value="" class="rounded-pill" style="background: url(pic/my/myteator網頁-10.png);background-size: 100% 100%;width: 100px;border:0px;">
			</div>
		</div> -->
		<div class="row" style="height:100px;"></div>
		<div class="row" style="position: absolute;right:50px;top:20%;height:190px;width:65px;border-radius:30px;background: #1F4D7E;box-shadow:10px 10px 20px 2px rgba(0,0,0,0.7);">
			<div class="col" style="height:10px;"></div>
			<div class="col bg- d-flex justify-content-center" >
				<div>
					<a href="payhome.php"><img src="pic/my/myteator網頁-21.png"  alt=""></a>
					<span class="d-flex justify-content-center text-white">購物車</span>
				</div>	
			</div>
			<div class="col" style="transform: translateY(-5px);">
				<hr size="4" style="opacity: 1;color:white;">
			</div>
			<form action="p01.php" method="post" accept-charset="utf-8"style="transform: translateY(-10px);">
				<div class="col d-flex justify-content-center">
					<div class="col-8"><a style="text-decoration: none;" class="text-warning fw-bold" href="sign.php">登入</a></div>
					<div class="col-5" ><a href="signup.php" style="text-decoration:none;" class="text-warning fw-bold">註冊</a></div>
				</div>
			</form>
		</div>
	</div>
	<div class="container-fluid">
	
	<div class="container mt-3 mb-3" style="height: 400px; border: 5px solid rgba(0,0,0,0.7); border-radius: 20px;box-shadow: 2px 2px 2px 2px rgba(0,0,0,0.7);">
		<div class="row justify-content-center align-items-center h-100">
			<div class="col d-flex justify-content-center">
				<form method="post" action="sign.php">
					<div class="col d-flex">
						<h2 class="fw-bold bg-success">登入<h2><h2>帳號</h2>
					</div>
					<div class="col">
						<label for="">帳號</label>
						<input type="text" name="acc">
					</div>
					<div class="col">
						<label for="">密碼</label>
						<input type="password" name="pass">
					</div>
					<div class="col">
						<input type="submit" name="submit" value="送出">
					</div>
				</form>
				
			</div>
		</div>
	</div>
	</div>
	<div class="container-fluid footer text-white" style="background: #394B6D;line-height: 3;font-weight: bold;">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-4 d-flex justify-content-center">&copyMTeacher,Inc.</div>
			<div class="col-12 col-lg-4 d-flex justify-content-center">FAQ聯絡我們付費方案</div>
			<div class="col-12 col-lg-4 d-flex justify-content-center">網站地圖、服務條款隱私聲明</div>
		</div>
	</div>
	
</body>
</html>