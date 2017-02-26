<!DOCTYPE html>
<html lang="en">

<?php include("include/header.php");?>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body>
	<!-- header -->
	<?php include("include/navbar.php");?>
	
    <!-- Intro Section -->
    <section id="slider" class="creb" data-animate="fadeInUp" data-animation-delay="100">
        <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
			  <?php
			  $sliders = array(
				  'post_type' => 'slider',
				  'posts_per_page' => 3,
				  'order' => 'DSC'
			  );
			  $slider_active = 1;
			  $slider_loop = new WP_Query($sliders);
			  while ($slider_loop->have_posts()) : $slider_loop->the_post();
				  ?>
				  <div class="item <?php echo $slider_active=1?"active":"" ?>">
					  <img class="img-responsive" src="images/slide-4.jpg" alt="Chania">
					  <div class="carousel-caption headings">
						  <h3 class="creb" data-animate="fadeInUp" data-animation-delay="500"><b >Helping Chinese Industry Manage</b> <br /> Water Resources</h3>
						  <p class="creb" data-animate="fadeInDown" data-animation-delay="800">Our focus is taking on the most difficult wastewater treatment challenge with an inspired technical solution. </p>
					  </div>
				  </div>
				  <?php
				  $packages_item_speed = $packages_item_speed + 2;
			  endwhile;
			  ?>
			<div class="item active">
				<img class="img-responsive" src="images/slide-4.jpg" alt="Chania">
				<div class="carousel-caption headings">
					<h3 class="creb" data-animate="fadeInUp" data-animation-delay="500"><b >Helping Chinese Industry Manage</b> <br /> Water Resources</h3>
				<p class="creb" data-animate="fadeInDown" data-animation-delay="800">Our focus is taking on the most difficult wastewater treatment challenge with an inspired technical solution. </p>
				</div>
			</div>
			
			<div class="item">
				<img class="img-responsive" src="images/slide-5.jpg" alt="Chania">
				<div class="carousel-caption headings">
					<h3 class="creb" data-animate="fadeInUp" data-animation-delay="500"><b>Optimizing Extremely</b> <br /> Limited Space</h3>
				<p class="creb" data-animate="fadeInDown" data-animation-delay="800">Our focus is taking on the most difficult wastewater treatment <br /> challenge with an inspired technical solution. </p>
				</div>
			</div>
			<div class="item">
				<img class="img-responsive" src="images/slide-6.jpg" alt="Chania">
				<div class="carousel-caption headings">
					<h3 class="creb" data-animate="fadeInUp" data-animation-delay="500"><b>Evaporate Downtime and </b> <br /> Installation Costs</h3>
				<p class="creb" data-animate="fadeInDown" data-animation-delay="800">Our focus is taking on the most difficult wastewater treatment <br /> challenge with an inspired technical solution. </p>
				</div>
			</div>
		  </div>

	<!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
		</div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                   <h2 class="creb" data-animate="fadeInDown" data-animation-delay="300">Apex Engineer helps the world’s most recognized companies <br /> solve important water challenges.</h2>
				   <div class="line"></div>
				   <p class="creb" data-animate="fadeInUp" data-animation-delay="350">Apex Engineering Bd is a leader in water technology for industrial and infrastructure markets <br /> with a focus on desalination, wastewater reuse, and zero liquid discharge.</p>
                </div>
            </div>
        </div>
    </section>
	
    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
				<div class="col-sm-4 col-md-4">
					<div class="thumbnail">
						<div class="thum-img">
							<img src="images/thumb1.jpg" alt="...">
						</div>
						<div class="caption">
						<h3>Further development</h3>
						<p>We strive to maintain a work environment where everyone has the opportunity to apply and develop skills and talents consistent with our values and business objectives. </p>
						<p><a href="#">Read More <i class="fa fa-caret-right"></i></a></p>
						</div>
					</div>
				</div>
				
				<div class="col-sm-4 col-md-4">
					<div class="thumbnail">
						<div class="thum-img">
							<img src="images/thumb2.jpg" alt="...">
						</div>
						<div class="caption">
						<h3>Company acquisition</h3>
						<p>Sometimes the simplest things are the hardest to find. So we created a new line for everyday life, All Year Round he simplest things are the hardest to find. So we created a new line for everyday</p>
						<p><a href="#">Read More <i class="fa fa-caret-right"></i></a></p>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<div class="thumbnail">
						<div class="thum-img">
							<img src="images/thumb.jpg" alt="...">
						</div>
						<div class="caption">
						<h3>Our mission statement</h3>
						<p>Sometimes the simplest things are the hardest to find. So we created a new line for everyday life, All Year Round he simplest things are the hardest to find. So we created a new line for everyday</p>
						<p><a href="#">Read More <i class="fa fa-caret-right"></i></a></p>
						</div>
					</div>
				</div>
            </div>
        </div>
    </section>
	<section id="meet">
		<div class="container">
			<div class="col-md-6">
				<h1>Meet our Company</h1>
				<p>
					Sometimes the simplest things are the hardest to find. So we created a new line for everyday life, All Year Round. Sometimes the simplest things are the hardest to find. So we created a new line for everyday life, All Year Round. Sometimes the simplest things are the hardest to find. So we created a new line for everyday life.
				</p>
				<br />
				<button class="sea-btn">SEE OUR LATEST WORK</button>
			</div>
			<div class="col-md-6 creb" data-animate="fadeInRight" data-animation-delay="500">
				<div class="company_pro">
					<img src="images/company.jpg" alt="icon" />
				</div>
			</div>
		</div>
	</section>
    <!-- Contact Section -->
    <section id="since">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>We are since 2016</p>
					<h3>THE STARTING POINT OF ALL ACHIVEMENT IS DESIRE</h3>
					<button class="btn btn-default subbutton">View More</button>
                </div>
            </div>
        </div>
    </section>
	<section id="boxer">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<a href="">
					<div class="box">
						<img class="img-responsive" src="images/box-1.jpg" alt="" />
						<div class="text-content">
							<h4>Life is not black and roases </h4>
							<p>Life is not black and roases </p>
						</div>
					</div>
					</a>
				</div>
				<div class="col-md-6">
					<a href="#">
					<div class="box">
						<img class="img-responsive" src="images/box-3.jpg" alt="" />
						<div class="text-content">
							<h4>Life is not black and roases </h4>
							<p>Life is not black and roases </p>
						</div>
					</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<section id="social-box">
		<div class="container">
			<div class="social-address">
				<div class="row">
					<div class="col-md-4">
					<center>
						<div id="shiva"><span class="count">200</span></div>
						<h5>Running Project</h5>
					</center>
					</div>
					<div class="col-md-4">
						<center>
						<div id="shiva"><span class="count">200</span></div>
						<h5>Pending Project</h5>
					</center>
					</div>
					<div class="col-md-4">
						<center>
						<div id="shiva"><span class="count">200</span></div>
						<h5>Finished Project</h5>
					</center>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- footer -->
	<?php include("include/footer.php");?>

</body>

</html>
