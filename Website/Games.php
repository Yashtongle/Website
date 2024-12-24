<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login Page</title>
  <link rel="stylesheet" href="College.css">
</head>
<body>
  <div class="de1">
    <div class="background1">
      <img src="background_dark.jpg" alt="">
    </div>
    <?php
    if(isset($_POST["button"])){
        $email = $_POST["email"];
        $password = $_POST["password"];
        require_once "connect.php";
        $sql = "SELECT * FROM yash WHERE email ='$email' AND password ='$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count==1){
          header("Location:College.html");
      }
      else{
          header("Location:College.html");
  
      }
    }
     ?>
    <form action="">
    <div class="login1">
      <i class="fa-solid fa-xmark"class="w1"></i>
      <p class="n1">Sign up to PlayStation</p>
      <input type="textbox"placeholder="Email" name="email"class="email">
      <input type="textbox"placeholder="Password" name="password" class="Pass">
      <a href="College.html"><button type="button" name="button" class="Nexbu"><P>Next</P></button></a>
      <a href="#"class="absony">About Sony Account</a>
      <a href="#"class="trsign">Trouble Signing In?</a>
      <input type="button" value="Create Acconut"class="Create">
    </div>
  </form>
  </div>
</body>
</html>