<?php
if(isset($_POST['submit'])){
	include_once 'db.inc.php';
  
  $email=$_POST['email'];
  $passwd=$_POST['password'];

  $sql = "INSERT INTO users (passwordus,emailus) VALUES( '$passwd','$email');";
  		mysqli_query($conect,$sql);
      if(!$sql){
        echo "Fiald";
      }else{
        echo "success";
      }

}
  		?>
<!-- 
  if(!preg_match("/[a-zA-Z]*",$email)||!preg_match("/[a-zA-Z]*",$email)){
  	header("Location: ../login.php?login=invalid");
  	exit();
  }
  else{
  	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
  		header("Location: ../login.php?login=invalid");
  		exit();
  	}else{
  		$sql = "INSERT INTO users (password,email) VALUES( '$passwd','$email');";
  		mysqli_query($conect,$sql);
  		
  	}

  }
}

?> -->

<!-- else{
  		$sql = "SELECT * FROM users WHERE email='$email'";
  		$res=mysqli_query($conect,$sql);
  		$checkdb=mysqli_num_rows($res);
  		$passwordhash= passwordhash($passwd,PASSWORD_DEFAULT);
  	} -->