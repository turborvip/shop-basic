<?php
    

    include '../config/Dbconfig.php';

    $username = $_REQUEST['username'];
    $pass = $_REQUEST['repassword'];
    $fullname = $_REQUEST['fullname'];
    $email = $_REQUEST['email'];
    $phonenumber = $_REQUEST['phonenumber'];
    $birthday = $_REQUEST['birthday'];
    $gender = $_REQUEST['gender'];
    var_dump($_REQUEST[]);die;
    // mã hóa mật khẩu
    
    $password_hash=password_hash($pass, PASSWORD_BCRYPT);

    $query = $mysqli -> query("SELECT * FROM user WHERE user.username='" . $username . "'");
	$user = $query->fetch_row();// chuyen doi tuong thanh mang
	// var_dump($user);die;
	if (isset($user)) {
        echo "Username is already exist !");
		// echo  "Username is already exist"."<br>"."Please come back and submit form !";
	} else {
        $sql = 'INSERT INTO `user`(username, password, fullname, email, phonenumber, gender,birthday)
        VALUES("'.$username.'", "'.$password_hash.'", "'.$fullname.'", "'.$email.'",
         "'.$phonenumber.'", "'.$gender.'", "'.$birthday.'")'; 

        if ($mysqli -> query($sql) === TRUE) {
         echo "<br>"."New record created successfully !";
        }
    }
				
    


   
?>
<html>
    <bR>
        <a href="../view/signIn.php">
            <h3>SIGN IN NOW</h3>
        </a>
    </br>
</html>