<div class="col-9">	
<?php 
	$userdata = $this->session->userdata('logged_user'); 
?>

<div class="card-deck">
	<div class="card">
		<div class="card-body d-flex justify-content-center align-items-center">
			<div>
				<h4 class="title my-0"><?= $userdata->first_name; ?> <?= $userdata->last_name; ?></h4>
				<p class="my-0"><?= $userdata->email; ?></p>
				<p class="my-0"><?= $userdata->phone; ?></p>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-body d-flex justify-content-center align-items-center">
			<div>
				<h4 class="title"><?= $userdata->email; ?></h4>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-body d-flex justify-content-center align-items-center">
			<div>
				<h4 class="title"><?= $userdata->phone; ?></h4>
			</div>
		</div>
	</div>
</div>
</div>
