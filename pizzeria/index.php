<?php
include_once "db_connect.php";
$db = $GLOBALS['db'];

$pizzaDetails = $db->getAllPizzaMenu();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Pizza - free responsive website template</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
    <meta name="author" content="templatemo">
    <!-- 
    Pizza Template
    http://www.templatemo.com/preview/templatemo_459_pizza
    -->
    
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- font-awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- custom -->
	<link rel="stylesheet" href="css/templatemo-style.css">
	<!-- google font -->
	<link href='//fonts.googleapis.com/css?family=Signika:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Chewy' rel='stylesheet' type='text/css'>

</head>
<body id="home" data-spy="scroll" data-target=".navbar-collapse">

	<!-- start navigation -->
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
				</button>
				<a href="#home" class="navbar-brand smoothScroll"><strong>PIZZA</strong></a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#home" class="inline-block mb-4 mx-4"><?php
                            $menu = $db->getMenuDetails(1);
                            echo $menu[0]['display_name'];
                            ?></a></li>
					<li><a href="#about" class="sinline-block mb-4 mx-4"><?php
                            $menu = $db->getMenuDetails(2);
                            echo $menu[0]['display_name'];
                            ?></a></li>
					<li><a href="#gallery" class="inline-block mb-4 mx-4"><?php
                            $menu = $db->getMenuDetails(3);
                            echo $menu[0]['display_name'];
                            ?></a></li>
					<li><a href="#contact" class="inline-block mb-4 mx-4"><?php
                            $menu = $db->getMenuDetails(4);
                            echo $menu[0]['display_name'];
                            ?></a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- end navigation -->

	<!-- start flexslider -->
    <?php
    $contents = $db->getContentDetails(6);
    echo $contents[0]['content'];
    ?>
	<!-- end flexslider -->

	<!-- start about -->
	<section id="about" class="templatemo-section templatemo-top-130">
		<div class="container">
            <?php
            $contents = $db->getContentDetails(7);
            echo $contents[0]['content'];
            ?>
		</div>
	</section>
	<!-- end about -->

	<!-- start gallery -->
	<section id="gallery" class="templatemo-section templatemo-light-gray-bg">
		<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center text-uppercase">Gallery</h2>
                    <hr>
                </div>
                <?php
                foreach ($pizzaDetails as $pizzaDetail) {
                ?>
                <div class="col-md-4 col-sm-4">
                    <div class="gallery-wrapper">
                        <?php
                        echo '<img src="images/'.$pizzaDetail['img'].'" class="img-responsive gallery-img"." alt="Pizza 1">'
                        ?>
                        <div class="gallery-des">
                            <h3><?php echo $pizzaDetail['display_name'] ?></h3>
                            <h5><?php echo $pizzaDetail['content'] ?></h5>
                        </div>
                    </div>
                </div>
<!--                <div class="col-md-4 col-sm-4">-->
<!--                    <div class="gallery-wrapper">-->
<!--                        <img src="images/gallery-img1.jpg" class="img-responsive gallery-img" alt="Pizza 1">-->
<!--                        <div class="gallery-des">-->
<!--                            <h3>Curabitur </h3>-->
<!--                            <h5>Cras in ante mattis, elementum nunc sed.</h5>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4 col-sm-4">-->
<!--                    <div class="gallery-wrapper">-->
<!--                        <img src="images/gallery-img1.jpg" class="img-responsive gallery-img" alt="Pizza 1">-->
<!--                        <div class="gallery-des">-->
<!--                            <h3>Curabitur </h3>-->
<!--                            <h5>Cras in ante mattis, elementum nunc sed.</h5>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4 col-sm-4">-->
<!--                    <div class="gallery-wrapper">-->
<!--                        <img src="images/gallery-img1.jpg" class="img-responsive gallery-img" alt="Pizza 1">-->
<!--                        <div class="gallery-des">-->
<!--                            <h3>Curabitur </h3>-->
<!--                            <h5>Cras in ante mattis, elementum nunc sed.</h5>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4 col-sm-4">-->
<!--                    <div class="gallery-wrapper">-->
<!--                        <img src="images/gallery-img2.jpg" class="img-responsive gallery-img" alt="Pizza 2">-->
<!--                        <div class="gallery-des">-->
<!--                            <h3>Lorem ipsum</h3>-->
<!--                            <h5>In ullamcorper gravida enim id pulvinar</h5>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4 col-sm-4">-->
<!--                    <div class="gallery-wrapper">-->
<!--                        <img src="images/gallery-img3.jpg" class="img-responsive gallery-img" alt="Pizza 3">-->
<!--                        <div class="gallery-des">-->
<!--                            <h3>Pellentesque</h3>-->
<!--                            <h5>Maecenas efficitur nisi id sapien</h5>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-6 col-sm-6">-->
<!--                    <div class="gallery-wrapper">-->
<!--                        <img src="images/gallery-img4.jpg" class="img-responsive gallery-img" alt="Pizza 4">-->
<!--                        <div class="gallery-des">-->
<!--                            <h3>Suspendisse</h3>-->
<!--                            <h5>Mauris sit amet augue sit amet risus</h5>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-6 col-sm-6">-->
<!--                    <div class="gallery-wrapper">-->
<!--                        <img src="images/gallery-img5.jpg" class="img-responsive gallery-img" alt="Pizza 5">-->
<!--                        <div class="gallery-des">-->
<!--                            <h3>Elementum</h3>-->
<!--                            <h5>Maecenas efficitur nisi id sapien</h5>-->
<!--                        </div>-->
<!--
<!--                    </div>-->
<!--                </div>-->
                <?php
                }
                ?>
            </div>
		</div>
	</section>
	<!-- end gallery -->

	<!-- start contact -->
	<section id="contact" class="templatemo-section">
		<div class="container">
            <?php
            $contents = $db->getContentDetails(9);
            echo $contents[0]['content'];
            ?>
		</div>
	</section>
	<!-- end contact -->

	<!-- start footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>Copyright &copy; 2084 Company Name</p>
					<hr>
					<ul class="social-icon">
						<li><a href="#" class="fa fa-facebook"></a></li>
						<li><a href="#" class="fa fa-twitter"></a></li>
						<li><a href="#" class="fa fa-instagram"></a></li>
						<li><a href="#" class="fa fa-pinterest"></a></li>
						<li><a href="#" class="fa fa-google"></a></li>
						<li><a href="#" class="fa fa-github"></a></li>
						<li><a href="#" class="fa fa-apple"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- end footer -->

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/custom.js"></script>

</body>
</html>