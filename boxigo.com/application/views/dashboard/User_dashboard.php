<div class="col-9">	
<?php 
	$userdata = $this->session->userdata('logged_user'); 
?>

<div class="card-deck mb-5">
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
		<div class="card-header">Total Estimates</div>
		<div class="card-body d-flex justify-content-center align-items-center">
			<div>
				<h1 class="title my-0"><?= sizeof($estimate_list); ?></h1>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-header">Quotations Received</div>
		<div class="card-body d-flex justify-content-center align-items-center">
			<div>
				<h1 class="title my-0">0</h1>
			</div>
		</div>
	</div>
</div>

<div class="card mb-5">
	<div class="card-header">
		<p class="card-title">Your Estimates</p>
	</div>
	<div class="card-body">
		<?php foreach ($estimate_list as $row) { ?>
		<div class="d-flex flex-row align-items-center my-3">
			<div class="mx-3"><h4 class="my-0">#<?= $row->estimate_id; ?></h4></div>
			<div class="mx-3">
				<p class="my-0">Moving from</p>
				<p class="my-0"><b><?= $row->moving_from; ?></b></p>
			</div>
			<div class="mx-3">
				<p class="my-0">Moving to</p>
				<p class="my-0"><b><?= $row->moving_to; ?></b></p>
			</div>
			<div class="mx-3">
				<p class="my-0">Moving on</p>
				<p class="my-0"><b><?= $row->moving_on; ?></b></p>
			</div>
			<div class="mx-3">
				<p class="my-0">Property Size</p>
				<span class="badge badge-info badge-pill"><?= $row->property_size; ?></span>
			</div>
			<div class="mx-3">
				<p class="my-0">Total Items</p>
				<span class="badge badge-success badge-pill"><?= $row->total_items; ?></span>
			</div>
		</div>
		<?php } ?>
	</ul>
</div>
	

</div>
