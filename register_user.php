
<?php include('server.php')


?>
  <!DOCTYPE html>

<html>
<head>
	<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>

	<link rel="stylesheet" href="style.css" type="text/css"/>
	<title>Register Yourself</title>
</head>
<body>

<div class="body-content">

  <div class="module">

    <h1>Create an account</h1>

    <form class="form" action="server.php" method="post">

      <div class="alert alert-error"></div>

        <input type="text" placeholder="First Name" name="firstname" required />
       	<input type="text" placeholder="Second Name" name="secondname" required />
        <input type="email" placeholder="Email" name="email" required />
         <input type="text" placeholder="User Name" name="username" required />
        <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
        <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />

           <input type="text" placeholder="Please Pick   Your Gender"  readonly />
	      <input type="radio" name="gender" value="male"> Male<br>
    	  <input type="radio" name="gender" value="female"> Female<br>
    	  <input type="radio" name="gender" value="other"> Other

        <input type="text"  data-date-inline-picker="true" placeholder="DateOfBirth format yyyy/dd/mm" name="DOB" required />
        <input type="text" placeholder="Secret Word" name="secretword" required />


      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
    </form>
    <p>Already a user? <a href="login.php" >Login</a></p>
  </div>
</div>
</body>
</html>
