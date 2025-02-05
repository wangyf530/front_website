<?php
if (isset($_SESSION['login'])) {
	to('admin.php');
	exit();
}

if (isset($_POST['acc'])) {
	$row = $ADMIN->find(['acc' => $_POST['acc'], 'pw' => $_POST['pw']]);
	// if($_POST['acc']=='admin' && $_POST['pw']=='1234'){
	if (!empty($row)) {
		// if(count($row)>0){ 如果輸錯就會是 null 所以不能用
		// session_start();
		$_SESSION['login'] = 1;
		to("admin.php");
	}
	echo "<script>alert('帳號或密碼錯誤')</script>";
}
?>

<div class="container vh-100 d-flex align-items-center justify-content-center">
	<div class="row w-100">
		<div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
			<!-- 正中央 -->
			<form method="post" action="?do=login" target="back">
				<!-- 帳號輸入欄 -->
				<div class="mb-3 row align-items-center justify-content-center">
					<label for="acc" class="col-sm-2 col-form-label">帳號</label>
					<div class="col-sm-4">
						<input name="acc" id="acc" autofocus="" type="text" class="form-control" placeholder="請輸入帳號">
					</div>
				</div>

				<!-- 密碼輸入欄 -->
				<div class="mb-3 row align-items-center justify-content-center">
					<label for="pw" class="col-sm-2 col-form-label">密碼</label>
					<div class="col-sm-4">
						<input name="pw" id="pw" type="password" class="form-control" placeholder="請輸入密碼">
					</div>
				</div>

				<!-- 按鈕區域 -->
				<div class="d-flex justify-content-center gap-3">
					<button type="submit" class="btn btn-primary">送出</button>
					<button type="reset" class="btn btn-secondary">清除</button>
				</div>
			</form>
		</div>
	</div>
	
</div>