<?php
session_start();
include 'api/dbc.php';
$id = $_POST['id'];

$sql = mysqli_query($conn, "SELECT * FROM fr_projects WHERE id = $id");
while ($row = mysqli_fetch_array($sql)) {
	$proj_id = $row['id'];
	$proj_name = $row['project_name'];
	$proj_disc = $row['project_disc'];
	$proj_owner = $row['project_owner'];
	$proj_tags = $row['project_tags'];
	$proj_price = $row['project_price'];
	$proj_deadline = $row['project_deadline'];
}
$ownerQuery = mysqli_query($conn, "SELECT * FROM fr_users WHERE id = $proj_owner");
while ($row = mysqli_fetch_array($ownerQuery)) {
	$name = $row['name'];
	$surname = $row['surname'];
	$email = $row['email'];
}




 ?>
<div class="ajax-container">
	<div class="row">
		<div class="col-md-12">
			<div class="portfolio-title">
				<div class="row">
					<div class="portfolio-nav-all col-md-1">
						<a href="#" data-ajax-portfolio-close data-tooltip data-original-title="Close"><i class="fa fa-th"></i></a>
					</div>
					<div class="col-md-10 center">
						<h2 class="mb-none"><?php echo $proj_name ?></h2>
					</div>
					<div class="portfolio-nav col-md-1">
						<a href="#" data-ajax-portfolio-prev class="portfolio-nav-prev" data-tooltip data-original-title="Previous"><i class="fa fa-chevron-left"></i></a>
						<a href="#" data-ajax-portfolio-next class="portfolio-nav-next" data-tooltip data-original-title="Next"><i class="fa fa-chevron-right"></i></a>
					</div>
				</div>
			</div>

			<hr class="tall">
		</div>
	</div>

	<div class="row mb-xl">
		<div class="col-md-4">

			<span class="img-thumbnail">
				<img alt="" class="img-responsive" src="img/projects/project.jpg">
			</span>

		</div>

		<div class="col-md-8">

			<div class="portfolio-info">
				<div class="row">
					<div class="col-md-12 center">
						<ul>
							<li>
								<a href="#" data-tooltip data-original-title="Like"><i class="fa fa-heart"></i><?php echo $id; ?></a>
							</li>
							<li>
								<i class="fa fa-calendar"></i>
							</li>
							<li>
								<i class="fa fa-tags"></i> <a href="#">Brand</a>, <a href="#">Design</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<h5 class="mt-sm">Project Description</h5>
			<p class="mt-xlg btnAcceptProject"><?php echo  $proj_disc ?></p>

			<a href="api/acceptProject.php?id=<?php echo $id ?>" class="btn btn-primary btn-icon"><i class="fa fa-external-link"></i>Project Accepteren</a>

			<ul class="portfolio-details">
				<li>
					<h5 class="mt-sm mb-xs">Extra Informatie</h5>

					<ul class="list list-inline list-icons">
						<li><i class="fa fa-check-circle"></i> <?php echo $proj_tags ?></li>
						<li><i class="fa fa-calender"></i> <?php echo $proj_deadline ?></li>
						<li><i class="fa fa-money"></i> <?php echo $proj_price?></li>
					</ul>
				</li>
				<li>
					<h5 class="mt-sm mb-xs">Client</h5>
					<p><?php echo $name ," ",$surname ?></p>
				</li>
			</ul>

		</div>
	</div>
</div>
