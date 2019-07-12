<div class="col-9">
<?php 
	$userdata = $this->session->userdata('logged_user');
	$delete_message = $this->session->flashdata('delete_message');
?>

<?php 
	if ($delete_message) {
?>
<div class="alert alert-<?php if($delete_message['status'] == 200) : ?>success<?php else: ?>danger<?php endif; ?>"><?= $delete_message['message']; ?></div>
<?php
	}
?>

<div class="card mt-5">
	<div class="card-header">
		<p class="card-title">Cancelled Estimates</p>
	</div>
	<div class="card-body">
		<div id="accordion">
		<?php 
		if($cancelled_list['total']>0):
		foreach ($cancelled_list['data'] as $row) { ?>
		<div class="panel">
			<div class="card-heading" id="heading<?= $row->estimate_id; ?>">
				<div class="d-flex flex-sm-row align-items-center my-3">
					<div class="d-flex flex-sm-row align-items-center pointer" data-toggle="collapse" data-target="#collapse<?= $row->estimate_id; ?>" aria-expanded="true" aria-controls="collapse<?= $row->estimate_id; ?>">
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
					</div>
					<div class="mx-2" data-toggle="tooltip" data-placement="top" title="Re-submit">
						<a href="<?= base_url(); ?>estimate/resubmit/<?= $row->estimate_id; ?>" class="badge badge-success badge-pill p-2"><i class="fa fa-sync-alt"></i></a>
					</div>
					<div class="mx-2" data-toggle="tooltip" data-placement="top" title="Delete">
						<a href="<?= base_url(); ?>estimate/delete/<?= $row->estimate_id; ?>" class="badge badge-danger badge-pill p-2"><i class="fa fa-trash"></i></a>
					</div>
				</div>
			</div>
			<div id="collapse<?= $row->estimate_id; ?>" class="collapse" aria-labelledby="heading<?= $row->estimate_id; ?>" data-parent="#accordion">
				<div class="card-body px-0">
					<?php if (!empty($row->items)): ?>
						<?php foreach ($row->items as $key => $value): ?>
							<li class="list-inline-item my-2">
								<?= ucfirst(str_replace("_", " ", $key)); ?>&nbsp;
								<span class="badge badge-info badge-pill"><?= $value; ?></span>
							</li>
						<?php endforeach ?>
					<?php else: ?>
						<div class="alert alert-info">There are no items in your list.</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<?php } else: ?>
		<h4 class="text-center">You have no cancelled estimates.</h4>
		<div class="d-flex flex-row justify-content-center">
			<a href="<?= base_url(); ?>estimate" class="btn btn-info btn-raised">Make an estimate now</a>
		</div>
		<?php endif; ?>
	</div>
		
	</ul>
</div>