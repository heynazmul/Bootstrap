<?php 
		$sql = "SELECT * FROM contact";
		$result = $conn->query($sql);
	?>
<!-- Contact Part Start-->

<section id="contact">
	
			<div class="container">
				
			<?php
		                if ($result->num_rows > 0) {
		                    while ($row = $result->fetch_assoc()) {
		             ?>
				<!-- Contact Part  -->
				<h6><?php echo $row['title']; ?></h6>
				<h1><?php echo $row['sub_title']; ?></h1>
				<form>
					<!-- Form Part 001 -->
					<div class="col-50">
						<div class="content mr-10">
							<input type="text" name="name" value="" placeholder="Enter Your Name">
							<input type="email" name="email" value="" placeholder="Enter Your email">
							<input type="text" name="phone" value="" placeholder="Enter Your Phone">
						</div>
					</div>
					<!-- Form Part 002 -->
					<div class="col-50">
						<div class="content ml-10">
							<textarea name="message" id="" placeholder="Write Message Here..."></textarea>
						</div>
					</div>
					<div class="submit_btn">
						<button class="btn" type="submit">Submit</button>
					</div>
				</form>
				<!-- Address Part  -->
				<div id="address">
					<div class="col-33">
						<span><i class="far fa-map"></i></span>
						<p>Address</p> 
						<p>Matuail,jatrabari,Dhaka</p>
					</div>
					<div class="col-33">
						<span><i class="far fa-envelope"></i></span>
						<p>Email </p>
						<p>nazmulxerxes01@gmail.com</p>
					</div>
					<div class="col-33">
						<span><i class="fas fa-mobile-alt"></i></span>
						<p>Phone</p>
						<p>01518707675</p>
					</div>
				</div>
				<?php
		                }
		            }
		            ?>
			</div>
		</section>
		<!-- Contact Part End-->
	</main>