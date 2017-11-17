<div class="container">
	<div class="row row-centered">
		<div class="col-md-12 title-forgot">
			<h1>Oh no, you forgot password<span>.</span></h1>
			<p>Try to look after it next time. The <span>Bootcamp Prague Alumni Network</span> will send you a new one! Please fill in the details below to receive your new password</p>
		</div>
	</div>
</div>

<div class="forgot-form">
	<form class="form-group" method="post" action="">
		
		<label for="inputEmail" class="">Email address</label>
        <input name="email" type="email" id="inputEmail" class="form-control" placeholder="email" required>

        <label for="inputName" class="">Name</label>
        <input name="name" type="text" id="inputName" class="form-control" placeholder="first and last name" required>

        <button class="btn btn-lg btn-warning btn-block button2" type="submit">Get new password</button>

    </form>
</div>

<style type="text/css">
	
.title-forgot {
	text-align: center;
	font-family: 'Pacifico', cursive;
	color: white;
	margin-top: 3%;
	margin-bottom: 1%;
}

.title-forgot p {
	font-family: 'Raleway', sans-serif;
	margin-top: 3%;
	max-width: 750px;
	margin-left: auto;
	margin-right: auto;
	font-size: 1rem;
}

.title-forgot span {
	color: #D9534F;
}

.title-forgot span {
	color: #D9534F;
}

.forgot-form {
	max-width: 400px;
	width: 100%;
	margin-left: auto;
	margin-right: auto;	
}

.forgot-form label {
	font-family: 'Raleway', sans-serif;
	color: white;
	padding-top: 5px;	
}

.forgot-form h4 {
	font-family: 'Pacifico', cursive;
	color: white;
	text-align: center;
	margin-bottom: 2rem;
	padding-top: 2rem;
}

.forgot-control:focus {
  border-color: #FF0000;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(217,83,79, 0.6);
}

.btn-primary, .btn-primary:hover, .btn-primary:active, .btn-primary:visited {
    background-color: #D9534F !important;
    border-color: #D9534F !important;
}

.button2 {
	width: 30%;
	font-size: 1.1rem;
	margin-top: 10px;
	float: left;
	margin-bottom: 20vh;
}

body {
	background-color: #505050;
}

