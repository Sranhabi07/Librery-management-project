<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login</title>
  <link rel='icon' href="../img/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Pangolin|Source+Code+Pro&amp;display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="../mdb/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../mdb/css/mdb.min.css" rel="stylesheet">
  
  <link rel="stylesheet" href="form.css">

</head>


<body>
<nav class="navbar navbar-expand-lg navbar-dark orange darken-1 sticky-top" style="font-family:'Source Code Pro', monospace;">
  <a href="../index.html" class="navbar-brand black-text accent-3">GIET LIBRERY</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="basicExampleNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link black-text mx-2" href="../index.html">Home</a>
      </li>
       
    </ul>
  </div>
</nav>




	<div class="d-flex justify-content-center" style="padding-top:5%;">
		<div class="card">
			<div class="card-header">

      <h1 class="white-text text-center" style="font-family:egypt_font;font-size:300%;color:#FFC312!important"> Student Login</h1>
								
				<div class="text-center imgani"><img id="imgdisp" src="login.png" height="100rem"></div>
			</div>
			<div class="card-body">
				<form action="#" method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="far fa-user"></i></span>
						</div>
						<input onclick="changeImageRev('user.gif')" type="text" name="username" class="form-control" placeholder="email" required>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input onclick="changeImage('password.gif')" name="password" type="password" class="form-control" placeholder="password" required>
					</div>
					<div class="form-group text-center">
						<input name="login_pressed" type="submit" value="Login" class="btn login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="../reg/index.html">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="../forgot/index.html">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="../mdb/js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../mdb/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../mdb/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../mdb/js/mdb.min.js"></script>

  <script type="text/javascript" src="../../cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

</body>

<script>
      
  function changeImage(imgName)
  {
     image = document.getElementById('imgdisp');
     image.src = imgName;
  }

  function changeImageRev(imgName)
  {
     image = document.getElementById('imgdisp');
     image.src = imgName;
  }
  
</script>

<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c5c42e77cf662208c948203/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>



</html>