<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid" style="height:400px;background: url(pic/my/myteator網頁-43.png);background-size: 100% 100%;">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
			  <div class="container-fluid">
			  	<div class="col d-flex justify-content-start">
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
			</nav>
		</div>
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
	<div class="container-fluid" style="background: url(pic/my/myteator網頁-28.png);background-size: 100% 100%;">
		<div class="row ">
			<div class="col-3 d-flex justify-content-center text-white" style="line-height: 3.5;">
				Course materials
			</div>
		</div>
	</div>
	<div class="container-fluid" style="background: url(pic/my/myteator網頁-61.png);background-size: 100% 100%;">
		<div class="row justify-content-md-around pt-3">
			<div class="col d-flex justify-content-center">首頁>商品列表</div>
			<div class="col d-flex justify-content-end" >
				<form method="get" style="width: 300px;" class="d-flex justify-content-center justify-content-md-start">
					<input type="text" placeholder="英語教材" style="background:transparent;border-top: 0px; border-left: 0;border-right: 0;border-bottom:2px solid #394B6D;">
					<button style="border:0px;background: transparent;"><img src="pic/my/myteator網頁-14.png" alt=""></button>
				</form>
			</div>
		</div>
		<div class="row justify-content-center pt-5">
			<div class="row d-lg-none">
				<div class="col">
					<input type="submit" onclick="open1()" style="background: url(pic/my/myteator網頁-17.png);background-size: 100% 100%;border:0;transform: scaleX(-1);" value="">
				</div>
			</div>
			<div class="col-2 d-lg-none" id="product" hidden="true">
				<span class="fw-bold">商品分類</span>
				<form method="get">
					<ul>
						<li><input type="radio" class="" style="">新商品</li>
						<li><input type="radio" class="" style="">價格</li>
						<li>
							<input type="radio" class="" style="" id="year" onchange="handleChange1()">年齡
							<ol style="list-style: none;" hidden="true" id="year1">
								<li><input type="radio">1-2</li>
								<li><input type="radio">3-5</li>
								<li><input type="radio">6-8</li>
								<li><input type="radio">9-10</li>
								<li><input type="radio">12+</li>
							</ol>
						</li>
						<script type="text/javascript">
							function handleChange1(){
								document.getElementById("year1").hidden=false;
							}
						</script>
						<li><input type="radio" class="" style="">課程分類</li>
					</ul>
				</form>
			</div>
			<script type="text/javascript">
				var a=0;
				function open1(){
					
					if(a%2==0)
					{
						document.getElementById("product").hidden=false;
					}
					else
					{
						document.getElementById("product").hidden=true;
					}	
					a++;
				}
			</script>
			<div class="col-2 d-none d-lg-block">
				<span class="fw-bold">商品分類</span>
				<form method="get">
					<ul>
						<li><input type="radio" class="" style="">新商品</li>
						<li><input type="radio" class="" style="">價格</li>
						<li>
							<input type="radio" class="" style="" id="year" onchange="handleChange1()">年齡
							<ol style="list-style: none;" hidden="true" id="year1">
								<li><input type="radio">1-2</li>
								<li><input type="radio">3-5</li>
								<li><input type="radio">6-8</li>
								<li><input type="radio">9-10</li>
								<li><input type="radio">12+</li>
							</ol>
						</li>
						<script type="text/javascript">
							function handleChange1(){
								document.getElementById("year1").hidden=false;
							}
						</script>
						<li><input type="radio" class="" style="">課程分類</li>
					</ul>
				</form>
			</div>
			<div class="col-8">
				<div class="row pb-5">
					<div class="col-12 col-lg-4">
						<img class="w-75" src="pic/my/myteator網頁-46.png">
					</div>
					<div class="col-12 col-lg-4 pt-4">
						<img class="w-75" src="pic/my/myteator網頁-46.png">
					</div>
					<div class="col-12 col-lg-4 pt-4">
						<img class="w-75" src="pic/my/myteator網頁-46.png">
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-lg-4 pt-4">
						<img class="w-75" src="pic/my/myteator網頁-46.png">
					</div>
					<div class="col-12 col-lg-4 pt-4">
						<img class="w-75" src="pic/my/myteator網頁-46.png">
					</div>
					<div class="col-12 col-lg-4 pt-4">
						<img class="w-75" src="pic/my/myteator網頁-46.png">
					</div>
				</div>
				<style type="text/css">
					ul.pagination {
					    display: inline-block;
					    padding: 0;
					    margin: 0;
					}

					ul.pagination li {display: inline;}

					ul.pagination li a {
					    color: black;
					    float: left;
					    padding: 8px 16px;
					    text-decoration: none;
					}
				</style>
				<div class="container-fluid pt-5 mt-5">
					<div class="row justify-content-center">
						<div class="col d-flex justify-content-center">
							<ul class="pagination">
								<li><a href="#">«</a></li>
								<li><a href="#">1</a></li>
								<li><a class="active" href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">»</a></li>
							</ul>
						</div>	
					</div>
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