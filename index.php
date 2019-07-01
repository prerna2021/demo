<?php include "../include/header.php";?>

<?php 
    authenticate();
?>
<!DOCTYPE html>
<html>
<head>


</div>
<div style="background:Indian_Rupee.png"><img  src="Indian_Rupee.png"  class="container"></div>
<div class="container" style="margin-top:10rem;" >
        <div class="col-sm-6" style="margin:auto;">
        <h1 class="text-center"><b>लॉग इन करें</b><br>LOGIN</h1><br>
            <form action="index.php" method = "post">

                <div class="form-group">
                <label for="username"><br>उपयोगकर्ता नाम<br>Username</label>
                <input type="text" name="username" class="form-control">
                </div>

                <div class="form-group">
                <label for="password"><br>पारण शब्द<br>Password</label>
                <input type="password" name="password" class="form-control">
                </div>             

                <input type="submit" class="btn btn-success" name="submit" value="LOGIN">
            </form>
        </div>
    </div>
	</html>
	</head>
<?php include "../include/footer.php";?>
