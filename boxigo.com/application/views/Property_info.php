<?php 

$form_one_data = $this->session->userdata('movedata');

?>
<div class="section" style="padding-top:100px">
	
	<div class="property-info-section">
		<div class="property-info-section-body py-5">
			<?php echo form_open('estimate/property_info_validate',array('class'=>'form form-horizontal')); ?>
				<div class="d-flex flex-row justify-content-center align-items-center">
					<p class="px-2">I live in </p>
					<div class="form-group mx-2 text-center <?php if(form_error('current_floor')): ?>has-danger<?php endif;?>">
						<input type="number" min="1" name="current_floor" class="form-control" value="<?= set_value('current_floor');?>">
						<span class="material-icons form-control-feedback">clear</span>
						<span class="text-danger"><?= form_error('current_floor'); ?></span>
					</div>
					<p class="px-2">floor with elevator</p>
					<div class="form-group mx-2 text-center <?php if(form_error('old_elevator_availability')): ?>has-danger<?php endif;?>">
						<select class="form-control" name="old_elevator_availability" value="<?= set_value('old_elevator_availability');?>">
							<option value="available">Available</option>
							<option value="not available">Not Available</option>
						</select>
						<span class="material-icons form-control-feedback">clear</span>
						<span class="text-danger"><?= form_error('old_elevator_availability'); ?></span>
					</div>
					<p class="px-2">to the property. </p>
				</div>
				<div class="d-flex flex-row justify-content-center align-items-center">
					<p class="px-2">Approximate distance from door to truck parking is </p>
					<div class="form-group mx-2 text-center <?php if(form_error('old_parking_dist')): ?>has-danger<?php endif;?>">
						<input type="text" name="old_parking_dist" class="form-control" value="<?= set_value('old_parking_dist');?>">
						<span class="material-icons form-control-feedback">clear</span>
						<span class="text-danger"><?= form_error('old_parking_dist'); ?></span>
					</div>
					<p>Meters and</p>
				</div>
				<div class="d-flex flex-row justify-content-center align-items-center">
					
					<p class="px-2">I am moving to </p>
					<div class="form-group mx-2 text-center <?php if(form_error('new_floor')): ?>has-danger<?php endif;?>">
						<input type="number" min="1" name="new_floor" class="form-control" value="<?= set_value('new_floor');?>">
						<span class="material-icons form-control-feedback">clear</span>
						<span class="text-danger"><?= form_error('new_floor'); ?></span>
					</div>
					<p class="px-2">floor with elevator</p>
					<div class="form-group mx-2 text-center <?php if(form_error('new_elevator_availability')): ?>has-danger<?php endif;?>">
						<select class="form-control" name="new_elevator_availability" value="<?= set_value('new_elevator_availability');?>">
							<option value="available">Available</option>
							<option value="not available">Not Available</option>
						</select>
						<span class="material-icons form-control-feedback">clear</span>
						<span class="text-danger"><?= form_error('new_elevator_availability'); ?></span>
					</div>
					<p class="px-2">to the property. </p>
				</div>
				<div class="d-flex flex-row justify-content-center align-items-center">
					<p class="px-2">Approximate distance from door to truck parking is </p>
					<div class="form-group mx-2 text-center <?php if(form_error('new_parking_dist')): ?>has-danger<?php endif;?>">
						<input type="text" name="new_parking_dist" class="form-control" value="<?= set_value('new_parking_dist');?>">
						<span class="material-icons form-control-feedback">clear</span>
						<span class="text-danger"><?= form_error('new_parking_dist'); ?></span>
					</div>
					<p>Meters.</p>
				</div>
				
				<div class="d-flex justify-content-center my-5">
					<input type="submit" name="form-two-next" class="btn btn-success btn-raised" value="Next">
				</div>
			</form>
		</div>
	</div>

</div>