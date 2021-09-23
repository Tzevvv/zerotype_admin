<?php
include 'control.php';
$get_data=new hello();
$select=$get_data->select_features();
$selcm=$get_data->select_commnet();
 foreach ($select as $se) {}
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Zerotype Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">


  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Free Website Template" name="keywords">
  <meta content="Free Website Template" name="description">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="csss/style.min.css" rel="stylesheet">
</head>
<body>
	<div id="header">
		<div>
			<div class="logo">
				<a href="index.php">Zero Type</a>
			</div>
			<ul id="navigation">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li class="active">
					<a href="features.php">Features</a>
				</li>
				<li>
					<a href="news.php">News</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				<li>
					<a href="contact.php">Contact</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div class="features">


			<h1>Features</h1>
			<p>
				Change, add, and remove items as you like. If you're having problems editing this website template, then don't hesitate to ask for help on the Forums.
			</p>
			<?php
				 foreach ($select as $se) {
			 ?>
			<div>
				<img src="http://localhost:81/zerotype/Admin/<?php echo $se['img'] ?>" alt="" height="300px" width="300px" >
				<h2><?php echo $se['caption1']; ?></h2>
				<p><?php echo $se['conten1']; ?></p>
				<h2><?php echo $se['caption2']; ?></h2>
				<p><?php echo $se['conten2']; ?></p>
			</div>


		<?php } ?>
		</div>
	</div>
	<div id="footer">
		<div class="clearfix">
      <div class="owl-carousel testimonial-carousel">
                  <div class="testimonial-item">
                      <div class="d-flex align-items-center mb-3">
                          <img class="img-fluid" src="img/testimonial-1.jpg" alt="">
                          <div class="ml-3">
                            <h4>Thank's T.u.n.ggg</h4>
                            <i>CEO/Modelnhis/Editor</i>
                          </div>
                      </div>
                      <p class="m-0">Tzev spent months creating this work, I hope teacher can help</p>
                  </div>
                  <div class="testimonial-item">
                      <div class="d-flex align-items-center mb-3">
                          <img class="img-fluid" src="img/testimonial-2.jpg" alt="">
                          <div class="ml-3">
                              <h4>LongBeoooo</h4>
                              <i>Photograper/model</i>
                          </div>
                      </div>
                      <p class="m-0">Tzev spent months creating this work, I hope teacher can help</p>
                  </div>
                  <div class="testimonial-item">
                      <div class="d-flex align-items-center mb-3">
                          <img class="img-fluid" src="img/testimonial-3.jpg" alt="">
                          <div class="ml-3">
                              <h4>Tehu_Boiz</h4>
                              <i>Family nutrition/Fitness trainer</i>
                          </div>
                      </div>
                      <p class="m-0">Tzev spent months creating this work, I hope teacher can help</p>
                  </div>

                  <?php  foreach ($selcm as $se_cm) { ?>
                  <div class="testimonial-item">
                      <div class="d-flex align-items-center mb-3">
												<img class="img-fluid" src="img\xxx.jpg" alt="" style="height:100px; width:100px;">
                          <div class="ml-3">
                            <h4>User</h4>
                            <i>Zerotype</i>
                          </div>
                      </div>
                      <p class="m-0"><?php echo $se_cm['conten'] ?></p>
                  </div>
                  <?php } ?>
              </div>


<br>
                      <div class="input-group">
                          <form  method="post" style="width:900px;">
                            <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="comment" name="conten">

                                <button class=" btn-primary font-weight-bold px-3" name="ok" >Sign Up</button>

                          </form>

                          <?php
                          if (isset($_POST['ok'])) {
                             $dk=$get_data->commnet_insert($_POST['conten']);}
                           ?>
                      </div>
                  </div>
              </div>
          </div>



		</div>
	</div>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/tempusdominus/js/moment.min.js"></script>
  <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
  <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

  <!-- Contact Javascript File -->
  <script src="mail/jqBootstrapValidation.min.js"></script>
  <script src="mail/contact.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>
</html>
