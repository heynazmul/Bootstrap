<?php 
include "config.php";
		$sql = "SELECT * FROM slider";
		$result = $conn->query($sql);
	?>
		<!-- Slider Part Start-->
			<section id="home">
			   <div id="particles-js" class="overlay"></div>	
				<div class="container">
					<?php
		                if ($result->num_rows > 0) {
		                    while ($row = $result->fetch_assoc()) {
		             ?>
					<!-- Content Part -->
					<div class="slider_content">
						<div class="description wow zoomIn" data-wow-duration="4s">
							<p><?php echo $row['slider_title']; ?></p>
							<p style="color:#fff;"><?php echo $row['slider_info']; ?></p>
							<h2><?php echo $row['slider_promo']; ?></h2>
							<button class="btn">My Work</button>
							<button class="btn">Hire Me</button>
						</div>
						<!-- Person Part -->
						<div class="person_image  wow fadeIn" data-wow-duration="6s" data-wow-delay="1s">
							<img src="images/me.png" alt="Person Image">
						</div>
					</div>
					<?php
		                }
		            }
		            ?>
				</div>			
			</section>