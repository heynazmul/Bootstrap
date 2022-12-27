<!-- Service Part Start-->
<?php 
		$sql = "SELECT * FROM service";
		$result = $conn->query($sql);
	?>	
<section id="service">			
			<div class="container">
				<!-- Services Content -->
				<?php
		                if ($result->num_rows > 0) {
		                    while ($row = $result->fetch_assoc()) {
		             ?>
				<h6><?php echo $row['service_title'];?></h6>
				<h1><?php echo $row['service_sub_title'];?></h1>
				<!-- Services Content -->
				<div>
					<!-- Service Content 001 -->
					<div class="col-33">
						<div class="content">
							<span><i class="fas fa-list-ul"></i></span>
							<h3><?php echo $row['service_1'];?></h3>
							<p><?php echo $row['description_1'];?></p>
						</div>
					</div>
					<!-- Service Content 002 -->
					<div class="col-33">
						<div class="content">
							<span><i class="far fa-lightbulb"></i></span>
							<h3><?php echo $row['service_2'];?></h3>
							<p><?php echo $row['description_2'];?></p>
						</div>
					</div>
					<!-- Service Content 003 -->
					<div class="col-33">
						<div class="content">
							<span><i class="far fa-clone"></i></span>
							<h3><?php echo $row['service_3'];?></h3>
							<p><?php echo $row['description_3'];?></p>
						</div>
					</div>
					<!-- Service Content 004 -->
					<div class="col-33">
						<div class="content">
							<span><i class="far fa-heart"></i></span>
							<h3><?php echo $row['service_4'];?></h3>
							<p><?php echo $row['description_4'];?></p>
						</div>
					</div>
					<!-- Service Content 005 -->
					<div class="col-33">
						<div class="content">
							<span><i class="fas fa-magic"></i></span>
							<h3><?php echo $row['service_5'];?></h3>
							<p><?php echo $row['description_5'];?></p>
						</div>
					</div>
					<!-- Service Content 006 -->
					<div class="col-33">
						<div class="content">
							<span><i class="fas fa-sliders-h"></i></span>
							<h3><?php echo $row['service_6'];?></h3>
							<p><?php echo $row['description_6'];?></p>
						</div>
					</div>
				</div>
				<?php
		                }
		            }
		            ?>	
			</div>
		</section>	
		<!-- Service Part End-->
