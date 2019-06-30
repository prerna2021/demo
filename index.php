<?php include "../include/header.php";?>

<?php 
    authenticate();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: Indian_Rupee.png;

  min-height: 380px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>


<div class="bg-img">
  <form action="/action_page.php" class="container">
    <h1>Login</h1>

    <label for="email"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="Username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn">Login</button>
  </form>
</div>



</body>
</html>

<!--</div>
<div style="background:Indian_Rupee.png"><img  src="Indian_Rupee.png"  class="container"></div>
<div class="container" style="margin-top:10rem;" >
        <div class="col-sm-6" style="margin:auto;">
        <h1 class="text-center">LOGIN</h1><br>
            <form action="index.php" method = "post">

                <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
                </div>

                <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
                </div>             

                <input type="submit" class="btn btn-success" name="submit" value="LOGIN">
            </form>
        </div>
    </div>-->
<?php include "../include/footer.php";?>
