<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="fontawesome-free-5.15.2-web/css/all.css">
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

	<div class="container-fluid" style="background: url(pic/my/myteator網頁-28.png);background-size: 100% 100%;">
		<div class="row pt-2 pb-2">
			<div class="col-3 d-flex justify-content-center text-white fw-bold" style="">
				找工作
			</div>
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
	</div>

	<div class="container-fluid" style="position: relative;">
		<div class="row">
			<div class="col-3"></div>
			<div class="col">
				首頁>找老師
			</div>
		</div>
		<div class="row d-lg-none">
			<div class="col">
				<input type="submit" onclick="open1()" style="background: url(pic/my/myteator網頁-17.png);background-size: 100% 100%;border:0;transform: scaleX(-1);" value="">
			</div>
		</div>
		<div class="row pt-5">
			<div class="col-3 d-lg-none" id="left" hidden="true" style="background:#394B6D;position: absolute;">
				<div class="row justify-content-center">
					<h3 class="fw-bold d-flex justify-content-end">服務分類</h3>	
				</div>
				<div class="row ">
					<div class="col d-flex justify-content-end">
						<ul>
							<li><input type="radio">伴讀/保姆</li>
							<li><input type="radio">學科</li>
							<li><input type="radio">語文</li>
							<li><input type="radio">音學</li>
							<li><input type="radio">休閒才藝</li>
							<li><input type="radio">術科/職場技能</li>
							<li><input type="radio">體育/舞蹈</li>
						</ul>
					</div>
				</div>
				<div class="row justify-content-end">
					<div class="col-md-5 col-lg-7"></div>
					<div class="col">
						<div class="col" style="font-size: 24px;border-bottom: 1px solid black;">進階篩選</div>
						<div class="col pt-1">服務金額</div>
						<div class="col d-flex">
							<div class="col-5"><input type="text" class="w-100" style="background: #D1D3D4;border:0px;" placeholder="$"></div>
							<div class="col-1">~</div>
							<div class="col-6"><input type="text" name="" id="" class="w-100" style="background: #D1D3D4;border:0px;" placeholder="$"></div>
						</div>
						<div class="col">服務經驗</div>
						<div class="col">
							<select style="background: #D1D3D4;border:0px;" class="w-100">
								<option>不限</option>
							</select>
						</div>
						<div class="col">服務地區</div>
						<div class="col">
							<select style="background: #D1D3D4;border:0px;" class="w-100">
								<option>請選擇地區</option>
							</select>
						</div>
						<div class="col">服務方式</div>
						<div class="col">
							<select style="background: #D1D3D4;border:0px;" class="w-100">
								<option>不限</option>
							</select>
						</div>
						<div class="col">服務對象</div>
						<div class="col">
							<select style="background: #D1D3D4;border:0px;" class="w-100">
								<option>不限</option>
							</select>
						</div>
						<div class="col">服務時段</div>
					</div>
				</div>
				<div class="row" style="padding:20px;">
					<div class="col d-flex justify-content-end">
						<ul>
							<li><input type="radio">平日全時段</li>
							<li><input type="radio">平日上午</li>
							<li><input type="radio">平日下午</li>
							<li><input type="radio">平日晚上</li>
							<li><input type="radio">假日全時段</li>
							<li><input type="radio">假日上午</li>
							<li><input type="radio">假日下午</li>
							<li><input type="radio">假日晚上</li>
						</ul>
					</div>
				</div>
			</div>
			<script type="text/javascript">
				var a=0;
				function open1() {
					if(a%2==0)
					{
						document.getElementById("left").hidden=false;
					}
					else
					{
						document.getElementById("left").hidden=true;
					}
					a++;
				}
			</script>
			<div class="col-3 d-none d-lg-block">
				<div class="row">
					<div class="col"></div>
					<div class="col">
						<div class="col"><h3 class="fw-bold">服務分類</h3></div>
						<div class="col">
							<li class="fas fa-caret-right d-block p-2"><input type="radio" style="margin-right:10px;margin-left: 10px;">伴讀/保姆</li>
							<li class="fas fa-caret-right d-block p-2"><input type="radio" style="margin-right:10px;margin-left: 10px;">學科</li>
							<li class="fas fa-caret-right d-block p-2"><input type="radio" style="margin-right:10px;margin-left: 10px;">語文</li>
							<li class="fas fa-caret-right d-block p-2"><input type="radio" style="margin-right:10px;margin-left: 10px;">音學</li>
							<li class="fas fa-caret-right d-block p-2"><input type="radio" style="margin-right:10px;margin-left: 10px;">休閒才藝</li>
							<li class="fas fa-caret-right d-block p-2"><input type="radio" style="margin-right:10px;margin-left: 10px;">術科/職場技能</li>
							<li class="fas fa-caret-right d-block p-2"><input type="radio" style="margin-right:10px;margin-left: 10px;">體育/舞蹈</li>
						</div>
						<div class="col-md-5 col-lg-7"></div>
						<div class="col">
							<div class="col" style="font-size: 24px;border-bottom: 1px solid black;">
								<div class="col d-flex justify-content-between">進階篩選<img src="pic/my/myteator網頁-20.png" alt=""></div>
							</div>
							<div class="col pt-1">服務金額</div>
							<div class="col d-flex">
								<div class="col-5"><input type="text" class="w-100" style="background: #D1D3D4;border:0px;" placeholder="$"></div>
								<div class="col-1">~</div>
								<div class="col-6"><input type="text" name="" id="" class="w-100" style="background: #D1D3D4;border:0px;" placeholder="$"></div>
							</div>
							<div class="col">服務經驗</div>
							<div class="col">
								<select style="background: #D1D3D4;border:0px;" class="w-100">
									<option>不限</option>
								</select>
							</div>
							<div class="col">服務地區</div>
							<div class="col">
								<select style="background: #D1D3D4;border:0px;" class="w-100">
									<option>請選擇地區</option>
								</select>
							</div>
							<div class="col">服務方式</div>
							<div class="col">
								<select style="background: #D1D3D4;border:0px;" class="w-100">
									<option>不限</option>
								</select>
							</div>
							<div class="col">服務對象</div>
							<div class="col">
								<select style="background: #D1D3D4;border:0px;" class="w-100">
									<option>不限</option>
								</select>
							</div>
							<div class="col">服務時段</div>
						</div>
						<div class="col"><input type="radio"><span>&nbsp平日全時段</span></div>
						<div class="col"><input type="radio"><span>&nbsp平日上午</span></div>
						<div class="col"><input type="radio"><span>&nbsp平日下午</span></div>
						<div class="col"><input type="radio"><span>&nbsp平日晚上</span></div>
						<div class="col"><input type="radio"><span>&nbsp假日全時段</span></div>
						<div class="col"><input type="radio"><span>&nbsp假日上午</span></div>
						<div class="col"><input type="radio"><span>&nbsp假日下午</span></div>
						<div class="col"><input type="radio"><span>&nbsp假日晚上</span></div>
					</div>
				</div>
			</div>
			<div class="col-md-9 col-12">
				<div class="container-fluid fw-bold">
					<div class="row justify-content-center">
						<style>
							#all>.row:hover{
								background: #F1E7DB;
								border-left:5px solid #FF8800;
							}
						</style>
						<div class="col-10" id="all">
							<h2 style="border-bottom:2px solid black;">語文案件>平日全時段</h2>
							<div class="row pt-4 pb-3" style="border-bottom: 1px solid black;">
								<div class="col-2 d-flex justify-content-end">
									<span class="bg-warning rounded-pill d-flex justify-content-center" style="width: 60px;">熱門</span>
								</div>
								<div class="col-10">
									國小一年級雙語伴讀/家教
								</div>
								<div class="col-2"></div>
								<div class="col pt-2">
									費用$600
								</div>
								<div class="col-5"></div>
								<div class="col">
									報名數:20
								</div>
							</div>
							<div class="row pt-4 pb-3" style="border-bottom: 1px solid black;">
								<div class="col-2 d-flex justify-content-end">
								</div>
								<div class="col-10">
									小一生寒假英文家教
								</div>
			
								<div class="col-2"></div>
								<div class="col">
									費用$500
								</div>
								<div class="col-5"></div>
								<div class="col">
									報名數:5
								</div>
							</div>
							<div class="row pt-4 pb-3" style="border-bottom: 1px solid black;">
								<div class="col-2 d-flex justify-content-end">
								</div>
								<div class="col-10">
									小五英文家教
								</div>
			
								<div class="col-2"></div>
								<div class="col">
									費用$400
								</div>
								<div class="col-5"></div>
								<div class="col">
									報名數:10
								</div>
							</div>
							<div class="row pt-4 pb-3" style="border-bottom: 1px solid black;">
								<div class="col-2 d-flex justify-content-end">
								</div>
								<div class="col-10">
									國小一年級雙語伴讀/家教
								</div>
			
								<div class="col-2"></div>
								<div class="col">
									費用$700
								</div>
								<div class="col-5"></div>
								<div class="col">
									報名數:14
								</div>
							</div>
							<div class="row pt-4 pb-3" style="border-bottom: 1px solid black;">
								<div class="col-2 d-flex justify-content-end">
								</div>
								<div class="col-10">
									完成學校數學項目，英文日常會話
								</div>
			
								<div class="col-2"></div>
								<div class="col">
									費用$700
								</div>
								<div class="col-5"></div>
								<div class="col">
									報名數:14
								</div>
							</div>
							<div class="row pt-4 pb-3" style="border-bottom: 1px solid black;">
								<div class="col-2 d-flex justify-content-end">
								</div>
								<div class="col-10">
									國小一年級雙語伴讀/家教
								</div>
			
								<div class="col-2"></div>
								<div class="col">
									費用$600
								</div>
								<div class="col-5"></div>
								<div class="col">
									報名數:5
								</div>
							</div>
							<div class="row pt-4 pb-3" style="border-bottom: 1px solid black;">
								<div class="col-2 d-flex justify-content-end">
								</div>
								<div class="col-10">
									小一生寒假英文家教
								</div>
			
								<div class="col-2"></div>
								<div class="col">
									費用$500
								</div>
								<div class="col-5"></div>
								<div class="col">
									報名數:10
								</div>
							</div>
							<div class="row pt-4 pb-3" style="border-bottom: 1px solid black;">
								<div class="col-2 d-flex justify-content-end">
								</div>
								<div class="col-10">
									小五英文家教
								</div>
			
								<div class="col-2"></div>
								<div class="col">
									費用$500
								</div>
								<div class="col-5"></div>
								<div class="col">
									報名數:10
								</div>
							</div>
							<div class="row pt-4 pb-3" style="border-bottom: 1px solid black;">
								<div class="col-2 d-flex justify-content-end">
								</div>
								<div class="col-10">
									國小一年級雙語伴讀/家教
								</div>
			
								<div class="col-2"></div>
								<div class="col">
									費用$600
								</div>
								<div class="col-5"></div>
								<div class="col">
									報名數:5
								</div>
							</div>
							<div class="row pt-4 pb-3" style="border-bottom: 1px solid black;">
								<div class="col-2 d-flex justify-content-end">
								</div>
								<div class="col-10">
									小一生寒假英文家教
								</div>
			
								<div class="col-2"></div>
								<div class="col">
									費用$600
								</div>
								<div class="col-5"></div>
								<div class="col">
									報名數:20
								</div>
							</div>
							<div class="row pt-4 pb-3" style="border-bottom: 1px solid black;">
								<div class="col-2 d-flex justify-content-end">
								</div>
								<div class="col-10">
									國小一年級雙語伴讀/家教
								</div>
			
								<div class="col-2"></div>
								<div class="col">
									費用$600
								</div>
								<div class="col-5"></div>
								<div class="col">
									報名數:20
								</div>
							</div>
							<div class="row pt-4 pb-3" style="border-bottom: 1px solid black;">
								<div class="col-2 d-flex justify-content-end">
								</div>
								<div class="col-10">
									國小一年級雙語伴讀/家教
								</div>
			
								<div class="col-2"></div>
								<div class="col">
									費用$600
								</div>
								<div class="col-5"></div>
								<div class="col">
									報名數:20
								</div>
							</div>
							<div class="row pt-4 pb-3" style="border-bottom: 1px solid black;">
								<div class="col-2 d-flex justify-content-end">
								</div>
								<div class="col-10">
									國小一年級雙語伴讀/家教
								</div>
			
								<div class="col-2"></div>
								<div class="col">
									費用$600
								</div>
								<div class="col-5"></div>
								<div class="col">
									報名數:20
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid footer text-white" style="background: #394B6D;line-height: 3;font-weight: bold;">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-4 d-flex justify-content-center">&wang,Inc.</div>
			<div class="col-12 col-lg-4 d-flex justify-content-center">FAQ聯絡我們付費方案</div>
			<div class="col-12 col-lg-4 d-flex justify-content-center">網站地圖、服務條款隱私聲明</div>
		</div>
	</div>
</body>
</html>