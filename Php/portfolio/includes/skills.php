<?php 
		$sql = "SELECT * FROM skills";
		$result = $conn->query($sql);
	?>
	
	<div class="container">
				<?php
		                if ($result->num_rows > 0) {
		                    while ($row = $result->fetch_assoc()) {
		             ?>
				<!-- Progress Bar -->
				<div class="progress_bar">
					<!-- Progress Bar Content -->
					<div class="col-33">
						<div class="progress_content wow fadeInTopLeft" data-wow-duration="5s" data-wow-delay="1s">
							<h5><?php echo $row['skill_1']; ?></h5>
							<div class="progress"><!-- Progress Bar 001 -->
								<div class="progress_achieve"></div>
							</div>
						</div>
					</div>
					<div class="col-33">
						<div class="progress_content wow fadeInBottomRight" data-wow-duration="5s" data-wow-delay=".1s">
							<h5><?php echo $row['skill_2']; ?></h5>
							<div class="progress"><!-- Progress Bar 002 -->
								<div style="width:80%; background: #1400ff;"  class="progress_achieve"></div>
							</div>
						</div>
					</div>
					<div class="col-33">
						<div class="progress_content wow fadeInBottomRight" data-wow-duration="5s" data-wow-delay=".1s">
							<h5><?php echo $row['skill_3']; ?></h5>
							<div class="progress"><!-- Progress Bar 003 -->
								<div class="progress_achieve" style="width:70%; background: #ce2b68;"></div>
							</div>
						</div>
					</div>
					<div class="col-33">
						<div class="progress_content wow fadeInTopRight" data-wow-duration="5s" data-wow-delay="1s">
							<h5><?php echo $row['skill_4']; ?></h5>
							<div class="progress"><!-- Progress Bar 004-->
								<div class="progress_achieve" style="width:50%; background:#ff0018;"></div>
							</div>
						</div>
					</div>
					<div class="col-33">
						<div class="progress_content wow fadeInBottomRight" data-wow-duration="5s" data-wow-delay="0.3s">
							<h5><?php echo $row['skill_5']; ?></h5>
							<div class="progress"><!-- Progress Bar 005-->
								<div class="progress_achieve" style="width:85%; background: #ffa801d4;"></div>
							</div>
						</div>
					</div>
					<div class="col-33">
						<div class="progress_content wow fadeInBottomRight" data-wow-duration="5s" data-wow-delay="1s">
							<h5><?php echo $row['skill_6']; ?></h5>
							<div class="progress"><!-- Progress Bar 006-->
								<div class="progress_achieve" style="width:60%; background: #18b7c8;"></div>
							</div>							
						</div>
					</div>
				</div>
				
				<?php
		                }
		            }
		            ?>
			</div>
		</section>
		<!-- About Part End-->