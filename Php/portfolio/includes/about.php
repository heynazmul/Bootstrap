<?php 
		$sql = "SELECT * FROM about";
		$result = $conn->query($sql);
	?>
<!-- About Part Start-->
<section id="about">
				<div class="container">
				<?php
		                if ($result->num_rows > 0) {
		                    while ($row = $result->fetch_assoc()) {
		             ?>
					
				<!-- About Content -->
				<div class="about_me">
					<h6 class="wow fadeInTopRight" data-wow-duration="2s" data-wow-delay=""><?php echo $row['about_section_title']; ?></h6>
					<h1 class="wow fadeInTopRight" data-wow-duration="2s" data-wow-delay=""><?php echo $row['about_section_welcome']; ?></h1>
					<p class="wow fadeInTopLeft" data-wow-duration="5s" data-wow-delay=""><?php echo $row['about_section_details']; ?></p>
				</div>
				<?php
		                }
		            }
		            ?>
