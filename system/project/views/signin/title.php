<div class="container">
	<div class="row row-centered">
		<div class="col-md-12 title-login">
			<h1>Login<span>.</span></h1>
			<p>Welcome back <span>Bootcamp Prague Alumni</span>! Are you interested in finding out what other alumnis are doing? Log in and get in touch.</p>
		</div>
	</div>
</div>

<div class="container form">

      <form class="form-signin" action="" method="post">
        <label for="inputUsername" class="sr-only">Username</label>
        <input name="username"  type="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <div class="forgot"><a href="<?php echo url::to('Forgot'); ?>"> forgot password?</a></div>
      </form>

  </div> <!-- /container -->


<style type="text/css">
	
.title-login {
	text-align: center;
	font-family: 'Pacifico', cursive;
	color: white;
	margin-top: 3%;
	margin-bottom: 5%;
}

.title-login p {
	font-family: 'Raleway', sans-serif;
	margin-top: 3%;
	max-width: 750px;
	margin-left: auto;
	margin-right: auto;
	font-size: 1rem;
}

.title-login span {
	color: #D9534F;
}

.title-login span {
	color: #D9534F;
}

.form {
	max-width: 350px;
	width: 100%;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 20%;
}

.checkbox {
	color: white;
}

.form-control:focus {
  border-color: #FF0000;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(217,83,79, 0.6);
}

.btn-primary, .btn-primary:hover, .btn-primary:active, .btn-primary:visited {
    background-color: #D9534F !important;
    border-color: #D9534F !important;
}

.forgot a{
	color: white;
	float: right;
	margin-top: 5px;
}

body {
	background-color: #505050;
}
