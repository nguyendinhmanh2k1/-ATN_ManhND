<?php
	if(isset($_SESSION['test_ongoing']))
		header("Location: files/quiz.php");
?>

<html>
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="keywords" content="iamrohitsuthar,Iamrohitsuthar,i am rohit suthar,Hi i am rohit suthar,Hi iamrohitsuthar,i am Rohit Suthar,I am RohitSuthar,mrrohitsuthar,rohit suthar,RohitSuthar,Rohit Suthar,rohitsuthar website,rohit suthar website,programmer,amravati,rohitsuthar,rohit suthar blog,Rohit Suthar,Rohit,Suthar,Rohit Karma,Suthar Rohit,iamrohitsuthar blog,iamrohitsuthar twitter,iamrohitsuthar instagram,iamrohitsuthar stackoverflow,iamrohitsuthar github,iamrohitsuthar linkedin,iamrohitsuthar website">
	    <title>Quizller</title>
	    <link rel="icon" type="image/png" href="admin/assets/img/favicon.png">
		<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/header.css">
		<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
		<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/tilt/tilt.jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/js-cookie@beta/dist/js.cookie.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<style>a:hover{
    background-color:#808080;
    border-radius:10px;
}</style>
	</head>

	<body>
		 <!--Header -->
		<header class="header1">
			 <!--Header desktop -->
			<!--<div class="container-menu-header">-->
				<!--<div class="wrap_header">-->
					<!-- Logo -->
					<!--<a href="index.php" class="logo">-->
					<!--	<img src="images/icons/logo.png" alt="IMG-LOGO">-->
					<!--</a>-->
			
					 <!--Header Icon -->
					 <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="#index">ManhND</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarText">
                 <ul class="navbar-nav mr-auto">
                  <!--  <li class="nav-item active">-->
                  <!--  <a class="nav-link" href="#trangchu" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="manhnd">ManhND</a>-->
                  <!--</li>-->
                  <li class="nav-item active">
                    <a class="nav-link" href="#gioithieu" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="giới thiệu">Giới thiệu</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="#huongdansudung" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="hướng dẫn sử dụng">Hướng dẫn sử dụng</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="#hotro" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="hỗ trợ">Hỗ Trợ</a>
                  </li>
                </ul>
                <!--<span class="navbar-text">-->
                <!--  Navbar text with an inline element-->
                <!--</span>-->
              </div>
            </nav>
        </header>
				<!--</div>-->
			
			<!--</div>-->
			

			 <!--Header Mobile -->
			<!--<div class="wrap_header_mobile">-->
				 <!--Logo moblie -->
			<!--	<a href="index.php" class="logo-mobile">-->
			<!--		<img src="images/icons/logo.png" alt="IMG-LOGO">-->
			<!--	</a>-->
			<!--</div>-->
							
			<!--</div>-->
				<header class="header1a">
			 <!--Header desktop -->
			<div class="container-menu-header">
				<div class="wrap_header">
			
					 <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <!--        <a class="navbar-brand" href="#trangchu">ManhND</a>-->
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto" style="background-color: #D3D3D3;border-radius: 10px">
                    <li class="nav-item active">
                    <a class="nav-link" href="#trangchu" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="manhnd">ManhND</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="#gioithieu" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="giới thiệu">Giới thiệu</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="#huongdansudung" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="hướng dẫn sử dụng">Hướng dẫn sử dụng</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="#hotro" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="hỗ trợ">Hỗ Trợ</a>
                  </li>
                </ul>
              </div>
            </nav>

				</div>
			</div>
		</header>

		<section>
			<div class="limiter" id="trangchu">
				<div class="container-login100">
					<div class="wrap-login100">
						<div class="login100-pic js-tilt" data-tilt>
							<img src="images/img-01.png" alt="IMG">
						</div>
						<div class="login100-form validate-form">
						<span class="login100-form-title">
							Học Sinh Đăng Nhập
						</span>
						
						<div class="wrap-input100 validate-input">
							<input class="input100" id="studentRollNumber" type="text" name="rollNumber"
								placeholder="Nhập tài khoản" required>
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-user-circle-o" aria-hidden="true"></i>
							</span>
							<span class="error text-danger" id="empty_roll_number_field"></span>
						</div>

						<div class="wrap-input100 validate-input">
							<input class="input100" id="studentPassword" type="password" name="password"
								placeholder="Nhập mật khẩu" required>
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-lock" aria-hidden="true"></i>
							</span>
							<span class="error text-danger" id="empty_roll_password_field"></span>
						</div>

						<div class="container-login100-form-btn">
							<button class="login100-form-btn" onclick="login()">
								Đăng Nhập
							</button>
						</div>

						<div class="text-center p-t-136">
						</div>
</div>
					</div>
				</div>
			</div>
		</section>
		<!--<section><div style="height: 700px;background: red;" id="home"></div> </section>-->
		<!--<section><div style="height: 700px;background: black;" id="Features">-->
		<!--    				<div class="container">-->
		<!--			<div class="row">-->
		<!--				<div class="col-md-12 text-center">-->
		<!--					<h2><b>CÂU HỎI THƯỜNG GẶP</b></h2>-->
		<!--					<div class="sub-heading">-->
		<!--						<p>-->
		<!--						Bạn có thể hỏi về các vấn đề. <br>Giải quyết điều đó cùng nhau cho chắc chắn-->
		<!--						</p>-->
								
		<!--					</div>-->
		<!--				</div>	-->

		<!--			</div>-->
		<!--		</div> <br><br><br>-->
		<!--		<div class="container">-->
		<!--			<div class="row">-->
		<!--				<div class="col-md-7">-->
		<!--					<div class="panel-group" id="accordian">-->
		<!--						<div class="panel panel-default">-->
		<!--							<div class="panel-heading" id="headingTwo">-->
		<!--								<h4 class="panel-title">-->
		<!--									<a href="#collapseTwo" class="collapsed" data-toggle="collapse" data-parent="#accordian">Nó hoạt động như thế nào?</a>-->
		<!--								</h4>-->
		<!--							</div>-->
		<!--							<div id="collapseTwo" class="panel-collapse collapse" aria-labelledby="headingTwo">-->
		<!--								<div class="panel-body">-->
		<!--									<p>-->
		<!--									Math ManhND là một trang web E-learning trực tuyến <br>-->
		<!--									ở đây bạn có thể học toán trung học và cải thiện kiến thức, kỹ năng toán của bạn	-->
		<!--									</p>-->
		<!--								</div>-->
		<!--							</div>-->
		<!--						</div>-->

		<!--						<div class="panel panel-default">-->
		<!--							<div class="panel-heading" id="headingTwo">-->
		<!--								<h4 class="panel-title">-->
		<!--									<a href="#collapseTwo" class="collapsed" data-toggle="collapse" data-parent="#accordian">Nó hoạt động như thế nào?</a>-->
		<!--								</h4>-->
		<!--							</div>-->
		<!--							<div id="collapseTwo" class="panel-collapse collapse" aria-labelledby="headingTwo">-->
		<!--								<div class="panel-body">-->
		<!--									<p>-->
		<!--									Math ManhND là một trang web E-learning trực tuyến <br>-->
		<!--									ở đây bạn có thể học toán trung học và cải thiện kiến thức, kỹ năng toán của bạn	-->
		<!--									</p>-->
		<!--								</div>-->
		<!--							</div>-->
		<!--						</div>-->




								
		<!--					</div>-->
		<!--				</div>-->

		<!--				<div class="freeimage" id="meimg">-->
		<!--					<div class="col-md-2 col-md-offset">-->
		<!--						<img src="img/faq1.png">-->
		<!--					</div>-->
		<!--				</div>-->

		<!--			</div>-->
		<!--		</div>-->
				
		<!--</div> </section>-->
		
		
		
<!--		<section><div id="Pricing">-->
<!--		    <div class="row text-center">-->
<!--	<h2><b>LIÊN HỆ VỚI CHÚNG TÔI</b></h2><br><br>-->
<!--	<center>-->
<!--	<div class="card" style="width: 30rem;">-->
<!--  <div class="card-body border-info">-->
   

<!--  </div>-->
<!--</div></center>-->
<!--</div>-->
<!--		</div> </section>-->
        <section>
    			<div class="limiter" id="gioithieu">
    				<div class="container-login100">
    					<div class="wrap-login100" style="padding:">
    						<div class="login100-form validate-form" style="width: auto">
    
                                    <div class="row text-center" style="margin-left:calc(0.5 * var(--bs-gutter-x)); margin-top:-90px">
                                	<h2><b>GIỚI THIỆU</b></h2><br><br>
                                    <h3>Thông tin trang web & thông tin tác giả</h3>
                                	<div class="card" style="--bs-card-border-color: none;">
                                  <div class="card-body border-info">
                                   
                                <!--   <form>-->
                                <!--  <div class="form-group">-->
                                <!--    <label for="exampleInputEmail1">Email address</label>-->
                                <!--    <input type="email" class="input100" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">-->
                                <!--    <small id="emailHelp" class="form-text text-muted">Chúng tôi sẽ không bao giờ chia sẻ email của bạn với bất kỳ ai khác.</small>-->
                                <!--  </div>-->
                                <!--  <div class="form-group">-->
                                <!--    <label for="exampleInputPassword1">message</label>-->
                                <!--    <input type="password" class="input100" class="form-control"  placeholder="enter your message">-->
                                <!--  </div>-->
                                  
                                <!--  <button type="submit" class="btn btn-primary">Submit</button>-->
                                <!--</form>-->
<div class="alert alert-primary" role="alert">
 Trang web thi trắc nghiệm: đo lường, đánh giá, và hỗ trợ học tập.
</div>
<div class="alert alert-secondary" role="alert">
  Trang web giúp giáo viên tạo bài kiểm tra một cách đơn giản hơn.
</div>
<div class="alert alert-success" role="alert">
  Trang web giúp học sinh ôn luyện lại kiến thức đã học trên lớp.
</div>
<div class="alert alert-danger" role="alert">
  Trang web giúp học sinh có cảm hứng học tập hơn.
</div>
<div class="alert alert-warning" role="alert">
  Tác giả trang web: Nguyễn Đình Mạnh - ManhND
</div>
                                  </div>
                                </div>
                                </div>
                            </div>
    					</div>
    				</div>
    		</div>
    </section>
        <section>
    		<div class="limiter" id="huongdansudung">
    				<div class="container-login100">
    					<div class="wrap-login100" style="padding:">
    						<div class="login100-form validate-form" style="width: auto">
    
                                    <div class="row text-center" style="margin-left:calc(0.5 * var(--bs-gutter-x)); margin-top:-90px">
                                	<h2><b>HƯỚNG DẪN SỬ DỤNG</b></h2><br><br>
                                
                                	<div class="card" style="--bs-card-border-color: none;">
                                  <div class="card-body border-info">
                                   
                                <!--   <form>-->
                                <!--  <div class="form-group">-->
                                <!--    <label for="exampleInputEmail1">Email address</label>-->
                                <!--    <input type="email" class="input100" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">-->
                                <!--    <small id="emailHelp" class="form-text text-muted">Chúng tôi sẽ không bao giờ chia sẻ email của bạn với bất kỳ ai khác.</small>-->
                                <!--  </div>-->
                                <!--  <div class="form-group">-->
                                <!--    <label for="exampleInputPassword1">message</label>-->
                                <!--    <input type="password" class="input100" class="form-control"  placeholder="enter your message">-->
                                <!--  </div>-->
                                  
                                <!--  <button type="submit" class="btn btn-primary">Submit</button>-->
                                <!--</form>-->
<div class="alert alert-primary" role="alert">
 Tài khoản đăng nhập là mã học sinh.
</div>
<div class="alert alert-secondary" role="alert">
  Mật khẩu đăng nhập sẽ được cấp khi thầy cô tạo bài kiểm tra.
</div>
<div class="alert alert-success" role="alert">
  Học sinh đăng nhập và làm bài. Chỉ làm bài một lần duy nhất không đăng xuất khi chưa làm bài xong.
</div>
                                  </div>
                                </div>
                                </div>
                            </div>
    					</div>
    				</div>
    		</div>
    </section>
    <section>
    		<div class="limiter" id="hotro">
    				<div class="container-login100">
    					<div class="wrap-login100" style="padding:">
    						<div class="login100-form validate-form" style="width: auto">
    
                                    <div class="row text-center" style="margin-left:calc(0.5 * var(--bs-gutter-x)); margin-top:-90px">
                                	<h2><b>LIÊN HỆ VỚI CHÚNG TÔI</b></h2><br><br>
                                
                                	<div class="card" style="--bs-card-border-color: none;">
                                  <div class="card-body border-info">
                                   
                                   <form>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Liên hệ qua Email</label>
                                    <small><input type="email" class="input100" class="form-control" aria-describedby="emailHelp" placeholder="manhnd@gmail.com" disabled></small>
                                    <small id="emailHelp" class="form-text text-muted">Chúng tôi sẽ không bao giờ chia sẻ email của bạn với bất kỳ ai khác.</small>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Liên hệ qua sđt</label>
                                    <small><input type="text" class="input100" class="form-control"  placeholder="0357519815" disabled></small>
                                  </div>
                                  
                                  <!--<button type="submit" class="btn btn-primary" href="https://www.facebook.com/profile.php?id=100006708525790">Submit</button>-->
                                </form>
                                  </div>
                                </div>
                                </div>
                            </div>
    					</div>
    				</div>
    		</div>
    </section>
		<script>
			
			$(document).ready(function () {

				if (Cookies.get('last_question_was_answered') != undefined) {
					Cookies.remove('last_question_was_answered');
					Cookies.remove('last_question');
				}
				if (Cookies.get('test_submitted_status') != undefined)
					Cookies.remove('test_submitted_status');	
			});


			$('.js-tilt').tilt({
				scale: 1.1
			})

			function login() {
				var someFieldIsEmpty = false;

				if (!$('#studentRollNumber').val()) {
					someFieldIsEmpty = true;
					$('#empty_roll_number_field').val("Please enter your roll number");
				}
				if (!$('#studentPassword').val()) {
					someFieldIsEmpty = true;
					$('#empty_roll_passsword_field').val("Please enter your password");
				}

				if (!someFieldIsEmpty) {
					$.ajax({
						type: 'POST',
						url: 'files/student_login.php',
						data: {
							'rollNumber': $('#studentRollNumber').val(),
							'password': $('#studentPassword').val(),
						},
						success: function (response) {
							if(response == "STUDENT_RECORD_NOT_FOUND")
								alert("Wrong Credentails entered");
							else
								window.location.replace("files/dashboard.php");
						}
					});
				}
			}
		</script>
	</body>
</html>