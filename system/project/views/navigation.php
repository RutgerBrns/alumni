<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo url::to(''); ?>">Coding Bootcamp Prague</a>
    </div>
    <ul class="nav navbar-nav navbar-right">          
      	<?php if (isset($_SESSION['user_id'])): ?>
          <a href="<?php echo url::to('admin'); ?>"><button class="btn btn-warning navbar-btn signin-btn">admin</button></a>
      		<a href="<?php echo url::to('profile'); ?>"><button class="btn btn-danger navbar-btn signin-btn">My profile</button></a>
      		<a href="<?php echo url::to('Signout'); ?>"><button class="btn btn-danger navbar-btn signin-btn">Sign Out</button></a>
      	<?php else : ?>
      		<a href="<?php echo url::to('Signin'); ?>"><button class="btn btn-danger navbar-btn signin-btn">Sign In</button></a> 
      	<?php endif ?>  
    </ul>
    
  </div>
</nav>