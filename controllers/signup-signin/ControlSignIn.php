<?php
session_start();
include './database/Dbconfig .php';

?>
<?php

	if (isset($_POST['submit'])) {
		if (empty($_POST['usenamelogin']) || empty($_POST['passlogin'])) {
			$_SESSION["error"] = "Username or Password is Invalid";
		} else {
			$user = $_POST['usenamelogin'];
			$pass = $_POST['passlogin'];
			
			//Giải mã
			// var_dump($isValid);die;
			$sql = "SELECT pass  FROM user";
			$result = $mysqli->query($sql);

			if ($result->num_rows > 0) {
			// output data of each row
				$i = 0
				while($row = $result->fetch_assoc()) {
					echo "pass: " . $row["pass"]. "<br>";
					$isValid = password_verify($pass, $row["pass"]);
					echo $i++;
				}
			} else {
			echo "0 results";
			}			

			$query = $mysqli -> query("SELECT * FROM user WHERE  user.username='" . $user . "'");
			$user = $query->fetch_row();// chuyen doi tuong thanh mang
			// var_dump($user);die;
			if (isset($user)) {
				if($isValid){
					header("Location: ../view/mainpage.php");
				    $_SESSION["fullname"] = $user[3];
				}else {
					header("Location: ../view/SignIn.php");
					$_SESSION["error"] = " Password is Invalid";
				}
				// header("Location: ../view/mainpage.php");
				// $_SESSION["fullname"] = $user[3];
			} else {
				header("Location: ../view/SignIn.php");
				$_SESSION["error"] = "Username and Password is Invalid";
			}
		} 
	}
  $mysqli -> close();
?>

?>
