<!DOCTYPE html>
<html lang="th">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>เว็บแอพพลิเคชั่นสำหรับตรวจสอบโอกาสในการขอทุนกู้ยืม</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/bootstrap/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="css/assets/style.css"/>
</head>
<body>
	<div class="container">
		<div class="row" id="site_header">
			<div class="col-md-3">
				<p class="text-center">
					<img src="img/logo.jpg" width="50%" height="auto" alt="Image">
				</p>
			</div>
			<div class="col-md-8">
				<h2>เว็บแอพพลิเคชั่นสำหรับตรวจสอบโอกาสในการขอทุนกู้ยืม</h2>
			</div>
		</div>
		<div class="row" id="site_content">
			<div class="col-md-3" id="site_content_menu">
				<ul class="nav nav-pills nav-stacked">
					<li role="presentation" id="standard-link" class="active"><a href="">เงื่อนไขในการกู้ยืม</a></li>
					<li role="presentation" id="form-link"><a href="">ตรวจสอบ</a></li>
				</ul>
			</div>
			<div class="col-md-9" id="site_content_form">
				<div class="row" id="site_content_form_standard">
					<div class="col-md-12">
						<h2>คุณสมบัติผู้กู้ยืมเงิน</h2>
						<ol>
							<li>เป็นผู้มีสัญชาติไทย</li>
							<li>
								เป็นผู้ขาดแคลนทุนทรัพย์ตามหลักเกณฑ์ที่คณะกรรมการกำหนด ดังนี้
								ผู้ขาดแคลนทุนทรัพย์ หมายความว่า ผู้ที่มีรายได้ต่อครอบครัวไม่เกิน 200,000 บาทต่อปี รายได้ต่อครอบครัว
								<br>
								พิจารณาตามหลักเกณฑ์ข้อใดข้อหนึ่งดังต่อไปนี้
								<ul class="list-unstyled">
									<li> (1). รายได้รวมของนักเรียนหรือนักศึกษาผู้ขอกู้ยืม รวมกับรายได้ของบิดามารดา ในกรณีที่บิดา มารดาเป็นผู้ใช้อำนาจปกครอง</li>
									<li> (2). รายได้รวมของนักเรียนหรือนักศึกษาผู้ขอกู้ยืม รวมกับรายได้ของผู้ปกครอง ในกรณีที่ผู้ใช้อำนาจปกครองมิใช่บิดา มารดา</li>
									<li> (3). รายได้รวมของนักเรียนหรือนักศึกษาผู้ขอกู้ยืม รวมกับรายได้ของคู่สมรสในกรณีที่ผู้ขอกู้ยืมได้ทำการสมรสแล้ว</li>
								</ul>
							</li>
							<li>
								มีคุณสมบัติอื่นตามที่คณะกรรมการกำหนด ดังนี้
								<ul class="list-unstyled">
									<li>3.1 เป็นผู้ที่มีผลการเรียนดีหรือผ่านเกณฑ์การวัดและประเมินผลของสถาบันการศึกษา</li>
									<li>3.2 เป็นผู้ที่มีความประพฤติดี ไม่ฝ่าฝืนระเบียบข้อบังคับของสถานศึกษาขั้นร้ายแรง หรือไม่เป็นผู้ที่มีความประพฤติเสื่อมเสีย เช่น หมกมุ่นในการพนัน เสพยาเสพติดให้โทษ ดื่มสุราเป็นอาจิณหรือเที่ยวเตร่ในสถานบันเทิงเริงรมย์เป็นอาจิณ เป็นต้น</li>
									<li>3.3 เป็นผู้มีคุณสมบัติครบถ้วนตามระเบียบหรือประกาศการสอบคัดเลือกบุคคลเข้าศึกษาในโรงเรียน สถานศึกษา
										หรือสถาบันการศึกษาที่อยู่ในสังกัดการควบคุม หรือกำกับดูแลของกระทรวงศึกษาธิการ กระทรวง
										หรือส่วนราชการอื่นๆ ทบวงมหาวิทยาลัย รัฐวิสาหกิจ</li>
										<li>3.4 ไม่เคยเป็นผู้สำเร็จการศึกษาระดับปริญญาตรีในสาขาใดๆ มาก่อน</li>
										<li>3.5 ไม่เป็นผู้ที่ทำงานประจำในระหว่างศึกษา</li>
										<li>3.6 ไม่เป็นบุคคลล้มละลาย</li>
										<li>3.7 ไม่เป็นหรือเคยเป็นผู้ได้รับโทษจำคุกโดยคำพิพากษาถึงที่สุดให้จำคุก เว้นแต่เป็นโทษสำหรับความผิดที่ได้กระทำโดยประมาทหรือความผิดลหุโทษ</li>
										<li>3.8 ต้องมีอายุในขณะที่ขอกู้ โดยเมื่อนับรวมกับระยะเวลาปลอดหนี้ 2 ปี และระยะเวลาผ่อนชำระอีก 15 ปี รวมกันแล้วต้องไม่เกิน 60 ปี</li>
									</ul>
								</li>
							</ol>
							<p>กรณีที่ผู้ขอกู้ยืมรายใดเคยกู้ยืมเงินกองทุน กยศ.หรือกองทุน กรอ. มาแล้ว แต่ผิดนัดชำระหนี้ และได้ทำสัญญาประนีประนอมยอมความก่อนฟ้องคดี และ/หรือเคยถูกฟ้องร้องดำเนินคดีมาแล้ว ผู้ขอกู้ยืมรายนั้นสามารถกู้ยืมเงินกองทุนต่อไป หากได้ชำระหนี้ตามสัญญาประนีประนอมยอมความ หรือชำระหนี้ตามคำพิพากษาจนเสร็จสิ้นแล้ว</p>
						</div>
					</div>
					<div class="row" id="site_content_form_input" style="display:none">
						<div class="col-md-12">
							<h2>แบบฟอร์มสำหรับตรวจสอบโอกาสกู้ยืม</h2><hr>
							<form action="#" role="form" method="post" data-toggle="validator" id="decision_support">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="InputName">ชื่อ</label>
											<input type="text" class="form-control" id="InputName" name="InputName" placeholder="ชื่อ" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="InputSurname">นามสกุล</label>
											<input type="text" class="form-control" id="InputSurname" name="InputSurname" placeholder="นามสกุล" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="InputNationality">สัญชาติ</label>
											<input type="text" class="form-control" id="InputNationality" name="InputNationality" placeholder="สัญชาติ" required>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 col-md-offset-4">
										<div class="form-group">
											<input type="submit" id="updateBtn" name="updateBtn" class="form-control btn btn-submit" value="แก้ไขข้อมูล">
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row" id="site_footer"></div>
		</div>
		<!-- jQuery -->
		<script src="js/jquery/jquery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="js/bootstrap/bootstrap.min.js"></script>
		<script src="js/bootstrap/validator.min.js"></script>
		<script>
			$(function() {
				$('#standard-link-link').click(function(e) {
					$("#site_content_form_standard").delay(100).fadeIn(100);
					$("#site_content_form_input").fadeOut(100);
					$(this).addClass('active');
					$("#form-link").removeClass('active');
					e.preventDefault();
				});
				$('#form-link').click(function(e) {
					$("#site_content_form_input").delay(100).fadeIn(100);
					$("#site_content_form_standard").fadeOut(100);
					$(this).addClass('active');
					$('#standard-link').removeClass('active');
					e.preventDefault();
				});
			});
		</script>
	</body>
	</html>