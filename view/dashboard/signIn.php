
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign In</title>
	<link rel="stylesheet" type="text/css" href= "<?php echo CSS_DIR ?>/bootstrap4/bootstrap.css?v="<?php echo time(); ?>>
	<link rel="stylesheet" type="text/css" href= "<?php echo CSS_DIR ?>/dashboard/style-login.css?v="<?php echo time(); ?>>
	<link rel="stylesheet" href="boostrap4/css/bootstrap.css">
	<link rel="stylesheet" href="../static/css/style-login.css">

<body>
	<div class="container-fluid">
		<div class="container">
			<form class="form-login" method="POST" action="<?php echo SITE_ROOT; ?>/login">
				<h2>Sign In</h2>
				<div class="page">
					<h6 class="error"> 
					<?php
					if (isset($_SESSION["error"])) { echo $_SESSION["error"]; } 
					unset($_SESSION['error']);
					?> 
					</h6>
					<label class="field field_v1">
						<input class="field__input" placeholder="e.g: Hoang Minh An" type="text" id="usenamelogin" name="usenamelogin">
						<span class="field__label-wrap">
							<span class="field__label">Username</span>
						</span>
					</label>
					<label class="field field_v2">
						<input class="field__input" placeholder="e.g. 12345678" type="password" id="passlogin" name="passlogin">
						<span class="field__label-wrap">
							<span class="field__label">Password</span>
						</span>
					</label>
					<a class="forgot-pass">Forgot password ?</a>
					<a href="sign-up" class="register">Register account ?</a>
					<button type="submit" class="btn" name="submit">Submit</button>
				</div>
			</form>
		</div>

	</div>
</body>

</html>