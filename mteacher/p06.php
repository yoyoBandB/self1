<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid" style="height:400px;background: url(pic/my/myteator網頁-66.png);background-size: 100% 100%;">
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
					    <a class="nav-link active text-white font-weight-bold" aria-current="page" href="#">最新消息</a>
						<a class="nav-link active text-white font-weight-bold" aria-current="page" href="#">關於我們</a>
						<a class="nav-link active text-white font-weight-bold" aria-current="page" href="#">找師資</a>
						<a class="nav-link active text-warning font-weight-bold" aria-current="page" href="#">找工作</a>
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
	<div class="container-fluid text-white" style="background: url(pic/my/myteator網頁-27.png);background-size: 100% 100%;">
		<div class="row justify-content-md-end pt-3">
			<div class="col d-flex justify-content-end" >
				<form method="get" style="width: 300px;" class="d-flex justify-content-center justify-content-md-start">
					<style>
						#se::placeholder{
							color:white;
						}
					</style>
					<input id="se" type="text" placeholder="搜尋" style="background:transparent;border-top: 0px; border-left: 0;border-right: 0;border-bottom:2px solid white;">
					<button style="border:0px;"><img src="pic/my/myteator網頁-14.png" alt=""></button>
				</form>
			</div>
		</div>
		<div class="row justify-content-center pb-lg-3">
			<div class="col d-flex justify-content-center">
				<span class="">來自領域的專業師資</span>
			</div>
		</div>
		<div id="carouselExampleControls" class="carousel slide d-lg-none" data-bs-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		    	<div class="row justify-content-center align-items-center pt-5">
		    		<div class="col-12 d-flex justify-content-center">
						<div>
							<div class="col-12 pb-2">
								學科教學	
							</div>
							<div class="col">
								<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">伴讀</font>
								<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">數學</font>
								<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">物理</font>
								<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">化學</font>
							</div>
							<div class="col" style="margin-top: 5px;">
								<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">國文</font>
								<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">英文</font>
								<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">歷史</font>
								<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">地理</font>
							</div>
						</div>
					</div>
		    	</div>
		    </div>
		    <div class="carousel-item">
			  	<div class="row justify-content-center align-items-center pt-5">
			  	 	<div class="col-12 d-flex justify-content-center">
						<div>
							<div class="col pb-2">
								休閒才藝	
							</div>
							<div class="col">
								<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">鋼琴</font>
								<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">大/小提琴</font>
								<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">薩克斯風</font>
							</div>
							<div class="col pt-1">
								<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">繪畫</font>
								<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">舞蹈</font>
							</div>
						</div>
					</div>
			  	</div>
		    </div>
		    <div class="carousel-item">
		      	<div class="row justify-content-center pt-5">
			      	<div class="col-12 d-flex justify-content-center">
			      		<div>
			      			<div class="col pb-2">
								語文教學	
							</div>
							<div class="col">
								<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">英文</font>   
								<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">日語</font>
								<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">韓文</font>
								<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">中文</font>
							</div>
							<div class="col pt-1">
								<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">英文作文</font>
								<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">法文</font>
								<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">泰文</font>
							</div>
			      		</div>
			      	</div>	
				</div>
		    </div>
		  </div>
		  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Next</span>
		  </button>
		</div>
		<div class="row d-none d-lg-flex">
			<div class="" style="width: 12%;"></div>
			<div class="col-3 d-flex justify-content-center">
				<div>
					<div class="col-12 pb-2">
						學科教學	
					</div>
					<div class="col">
						<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">伴讀</font>
						<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">數學</font>
						<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">物理</font>
						<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">化學</font>
					</div>
					<div class="col" style="margin-top: 5px;">
						<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">國文</font>
						<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">英文</font>
						<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">歷史</font>
						<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">地理</font>
						
					</div>
				</div>
			</div>
			<div class="col-3 d-flex justify-content-center" style="border-left: 1px solid;border-right: 1px solid;">
				<div>
					<div class="col pb-2">
						休閒才藝	
					</div>
					<div class="col">
						<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">鋼琴</font>
						<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">大/小提琴</font>
						<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">薩克斯風</font>
					</div>
					<div class="col pt-1">
						<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">繪畫</font>
						<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">舞蹈</font>
					</div>
				</div>
			</div>
			<div class="col-3 d-flex justify-content-center">
				<div>
					<div class="col pb-2">
						語文教學	
					</div>
					<div class="col">
						<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">英文</font>   
						<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">日語</font>
						<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">韓文</font>
						<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">中文</font>
					</div>
					<div class="col pt-1">
						<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">英文作文</font>
						<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">法文</font>
						<font class="bg-white fw-bold rounded-pill" style="color:#1F4D7E;padding: 0px 5px 0px 5px;margin: 2px;">泰文</font>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center pt-4 pb-5">
			<div class="col d-flex justify-content-center">
				<span class="rounded-pill" style="background:#F7941D;"><font class="p-3"><a href="" style="text-decoration: none;color:white;">查看更多</a></font></span>
			</div>
		</div>
	</div>

	<div class="container-fluid fw-bold">
		<div class="row justify-content-center p-5">
			<div class="col-lg-4">
				<h2 class="d-flex justify-content-center justify-content-lg-start" style="border-bottom:2px solid black;">入門課程:給首次使用的您</h2>
				<style type="text/css">
					.hover:hover{
						background: #F1E7DB;
						border-left:5px solid #FF8800;
					}
				</style>
				<div class="hover">
					<div class="row pt-4">
						<div class="col-3 d-flex justify-content-end">
							<span class="bg-warning rounded-pill d-flex justify-content-center" style="width: 60px;">熱門</span>
						</div>
						<div class="col-9">
							國小一年級雙語伴讀/家教
						</div>
					</div>
					<div class="row pb-4 pt-2" style="border-bottom: 1px solid black;">
						<div class="col-3"></div>
						<div class="col">
							費用$600
						</div>
						<div class="col">
							報名數:20
						</div>
					</div>
				</div>
				<div class="hover">
					<div class="row pt-4">
						<div class="col-3 d-flex justify-content-end">
							
						</div>
						<div class="col-6">
							小一生寒假英文家教
						</div>
					</div>
					<div class="row pb-4 pt-2" style="border-bottom: 1px solid black;">
						<div class="col-3"></div>
						<div class="col">
							費用$500
						</div>
						<div class="col">
							報名數:5
						</div>
					</div>
				</div>
				<div class="hover">
					<div class="row pt-4">
						<div class="col-3 d-flex justify-content-end">
							
						</div>
						<div class="col-6">
							小五英文家教
						</div>
					</div>
					<div class="row pb-4 pt-2" style="border-bottom: 1px solid black;">
						<div class="col-3"></div>
						<div class="col">
							費用$400
						</div>
						<div class="col">
							報名數:10
						</div>
					</div>
				</div>
				<div class="hover">
					<div class="row pt-4">
						<div class="col-3 d-flex justify-content-end">
							
						</div>
						<div class="col-9">
							完成學校數學項目，英文日常會話
						</div>
					</div>
					<div class="row pb-4 pt-2">
						<div class="col-3"></div>
						<div class="col">
							費用$700
						</div>
						<div class="col">
							報名數:14
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-1"></div>
			<div class="col-lg-4 pt-5 pt-lg-0">
				<h2 class="d-flex justify-content-center justify-content-lg-start" style="border-bottom:2px solid black;">高專課程:術業專精的您</h2>
				<div class="row pt-4">
					<div class="col-3 d-flex justify-content-end">
						
					</div>
					<div class="col-6">
						烹飪
					</div>
				</div>
				<div class="row pb-4 pt-2" style="border-bottom: 1px solid black;">
					<div class="col-3"></div>
					<div class="col">
						費用$700
					</div>
					<div class="col">
						報名數:4
					</div>
				</div>
				<div class="row pt-4">
					<div class="col-3 d-flex justify-content-end">
						
					</div>
					<div class="col-6">
						觀念解題，有耐心
					</div>
				</div>
				<div class="row pb-4 pt-2" style="border-bottom: 1px solid black;">
					<div class="col-3"></div>
					<div class="col">
						費用$700
					</div>
					<div class="col">
						報名數:7
					</div>
				</div>
				<div class="row pt-4">
					<div class="col-3 d-flex justify-content-end">
						<span class="bg-warning rounded-pill d-flex justify-content-center" style="width: 60px;">熱門</span>
					</div>
					<div class="col-6">
						英文會話家教
					</div>
				</div>
				<div class="row pb-4 pt-2" style="border-bottom: 1px solid black;">
					<div class="col-3"></div>
					<div class="col">
						費用$1000
					</div>
					<div class="col">
						報名數:4
					</div>
				</div>
				<div class="row pt-4">
					<div class="col-3 d-flex justify-content-end">
						
					</div>
					<div class="col-9">
						找AutoCAD家教
					</div>
				</div>
				<div class="row pb-4 pt-2">
					<div class="col-3"></div>
					<div class="col">
						費用$700
					</div>
					<div class="col">
						報名數:4
					</div>
				</div>
			</div>
		</div>	
		<div class="row pb-5">
			<div class="col d-flex justify-content-center">
				<span class="rounded-pill" style="background:#F7941D;"><font class="p-3"><a href="" style="text-decoration: none;color:white;">查看更多</a></font></span>
			</div>
		</div>
	</div>

	<div class="container-fluid" style="color:white !important;background: url(pic/my/myteator網頁-60.png);background-size: 100% 100%;">
		<div class="row justify-content-center pt-5">
			<div class="col d-flex justify-content-center" style="font-weight: bold;">
				<font style="" class="">付費</font><font class="text-warning d-flex align-items-center">家教方案</font>
			</div>
		</div>
		<div class="row d-none d-lg-flex pb-5">
			<div class="col-4" style="border-right: 2px solid white;font-weight: bold;">
				<div class="col d-flex justify-content-center m-1 pt-2">
					<div>
						<div class="col d-flex justify-content-center fw-bold">VIP</div>
						<div class="col fw-bold">First Priority Support</div>
					</div>
				</div>
				<div class="col d-flex justify-content-center m-1 pt-5">
					<div class="fs-md-1 fs-1">
						<sup>TW$</sup>999<sub>/月</sub>
					</div>
				</div>
			</div>
			<div class="col-4" style="border-right: 2px solid white;font-weight: bold;">
				<div class="col d-flex justify-content-center m-1 pt-2">
					<div>
						<div class="col d-flex justify-content-center fw-bold">Unlimited</div>
						<div class="col fw-bold">個人教師&</div>
						<div class="col d-flex fw-bold justify-content-center">Freelancers</div>
					</div>
				</div>
				<div class="col d-flex justify-content-center m-1" style="padding-top: 23px;">
					<div class="fs-md-1 fs-1">
						<sup>TW$</sup>399<sub>/月</sub>
					</div>
				</div>
			</div>
			<div class="col-4" style="font-weight: bold;">
				<div class="col d-flex justify-content-center m-1 pt-2">
					<div>
						<div class="col d-flex justify-content-center fw-bold">Combo</div>
						<div class="col fw-bold">企業學校</div>
					</div>
				</div>
				<div class="col d-flex justify-content-center m-1 pt-5">
					<div class="fs-md-1 fs-1">
						<sup>TW$</sup>199<sub>/月</sub>
					</div>
				</div>
			</div>
		</div>
		<div class="row d-lg-none pb-5">
			<div class="col-12" style="font-weight: bold;">
				<div class="col d-flex justify-content-center m-1 pt-2">
					<div>
						<div class="col d-flex justify-content-center fw-bold">VIP</div>
						<div class="col fw-bold">機構法人</div>
					</div>
				</div>
				<div class="col d-flex justify-content-center m-1 pt-5">
					<div class="fs-md-1 fs-1">
						<sup>TW$</sup>999<sub>/月</sub>
					</div>
				</div>
			</div>
			<div class="col-12 pt-5 pb-5" style="background:#31689B;font-weight: bold;">
				<div class="col d-flex justify-content-center m-1 pt-2">
					<div>
						<div class="col d-flex justify-content-center fw-bold">Unlimited</div>
						<div class="col fw-bold">Entrepreneurs&</div>
						<div class="col d-flex fw-bold justify-content-center">Freelancers</div>
					</div>
				</div>
				<div class="col d-flex justify-content-center m-1" style="padding-top: 23px;">
					<div class="fs-md-1 fs-1">
						<sup>TW$</sup>399<sub>/月</sub>
					</div>
				</div>
			</div>
			<div class="col-12" style="font-weight: bold;">
				<div class="col d-flex justify-content-center m-1 pt-2">
					<div>
						<div class="col d-flex justify-content-center fw-bold">Combo</div>
						<div class="col fw-bold">For Personal Use</div>
					</div>
				</div>
				<div class="col d-flex justify-content-center m-1 pt-5">
					<div class="fs-md-1 fs-1">
						<sup>TW$</sup>199<sub>/月</sub>
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