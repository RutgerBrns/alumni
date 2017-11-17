<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Raleway" rel="stylesheet">

   	<!-- jQuery library -->
	<script src="js/jquery-3.2.1.min.js"></script>

	<!-- Latest compiled Bootstrap -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	 <!-- Latest compiled and minified Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

     <!-- Latest compiled and minified fontawesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Vector map -->
    <script src="js/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill.js"></script>
    
    <!-- Select Country JS -->
    <script src="js/bootcamp-map.js"></script>

    <!-- Vector map CSS-->
    <link rel="stylesheet" href="css/jquery-jvectormap-2.0.3.css">

    <!-- Remodal js -->
    <script src="js/remodal.min.js"></script>

    <!-- Remodal CSS --> 
    <link rel="stylesheet" href="css/remodal.css">
    <link rel="stylesheet" href="css/remodal-default-theme.css">
    

    <!-- CSS-->
    <link rel="stylesheet" href="css/style.css">


    <title><?php echo $title; ?> | <?php echo config::get('site_title'); ?></title>
</head>
<body>

	<div class="">

	    <?php echo $top_navigation; ?>

	    <?php echo $page_layout; ?>

	    <?php echo $footer; ?>
	    
    </div>

   
</body>
</html>


