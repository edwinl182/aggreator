<?php 

$movedata = $this->session->userdata('movedata');

?>

<section class="section" style="padding-top:100px">
	<div class="container">
		<?php echo form_open('estimate/items_data',array('class'=>'form')); ?>
		<ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" id="pills-livingroom-tab" data-toggle="pill" href="#pills-livingroom" role="tab" aria-controls="pills-livingroom" aria-selected="true">Living Room</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="pills-bedroom-tab" data-toggle="pill" href="#pills-bedroom" role="tab" aria-controls="pills-bedroom" aria-selected="false">Bed Room</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="pills-kitchen-tab" data-toggle="pill" href="#pills-kitchen" role="tab" aria-controls="pills-kitchen" aria-selected="false">Kitchen</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="pills-other-tab" data-toggle="pill" href="#pills-other" role="tab" aria-controls="pills-other" aria-selected="false">Other</a>
			</li>
		</ul>
		<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="pills-livingroom" role="tabpanel" aria-labelledby="pills-livingroom-tab">
					<div class="d-flex justify-content-center align-items-center">
						<img src="<?= base_url(); ?>includes/img/living-room.png" class="img" width="300">
					</div>
					<h4 class="title">Furnitures</h4>
					<div class="d-flex flex-row justify-content-center align-items-center">
						<p class="mx-2">I have </p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="center_table" class="form-control" value="<?= set_value('center_table');?>">
						</div>
						<p class="mx-2">Center Table, </p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="side_table" class="form-control" value="<?= set_value('side_table');?>">
						</div>
						<p class="mx-2">Side Table, </p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="computer_table" class="form-control" value="<?= set_value('computer_table');?>">
						</div>
						<p class="mx-2">Computer Table, </p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="study_table" class="form-control" value="<?= set_value('study_table');?>">
						</div>
						<p class="mx-2">Study Table, </p>
					</div>
					<div class="d-flex flex-row justify-content-center align-items-center">
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="foldable_chair" class="form-control" value="<?= set_value('foldable_chair');?>">
						</div>
						<p class="mx-2">Foldable Chair,</p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="non_foldable_chair" class="form-control" value="<?= set_value('non_foldable_chair');?>">
						</div>
						<p class="mx-2">Non-Foldable Chair,</p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="plastic_chair" class="form-control" value="<?= set_value('plastic_chair');?>">
						</div>
						<p class="mx-2">Plastic Chair,</p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="tv_cabinet" class="form-control" value="<?= set_value('tv_cabinet');?>">
						</div>
						<p class="mx-2">Television Cabinet,</p>
					</div>
					<div class="d-flex flex-row justify-content-center align-items-center">
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="sofa_1_seater" class="form-control" value="<?= set_value('sofa_1_seater');?>">
						</div>
						<p class="mx-2">Sofa 1 seater,</p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="sofa_2_seater" class="form-control" value="<?= set_value('sofa_2_seater');?>">
						</div>
						<p class="mx-2">Sofa 2 seater,</p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="sofa_3_seater" class="form-control" value="<?= set_value('sofa_3_seater');?>">
						</div>
						<p class="mx-2">Sofa 3 seater,</p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="home_theater" class="form-control" value="<?= set_value('home_theater');?>">
						</div>
						<p class="mx-2">Home Theater.</p>
					</div>
					<h4 class="title">Electronics</h4>
					<div class="d-flex flex-row justify-content-center align-items-center">
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="computer" class="form-control" value="<?= set_value('computer');?>">
						</div>
						<p class="mx-2">Computer,</p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="television" class="form-control" value="<?= set_value('television');?>">
						</div>
						<p class="mx-2">TV,</p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="fan" class="form-control" value="<?= set_value('fan');?>">
						</div>
						<p class="mx-2">Fan, and</p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="inverter" class="form-control" value="<?= set_value('inverter');?>">
						</div>
						<p class="mx-2">Inverter.</p>
					</div>
			</div>
			<div class="tab-pane fade" id="pills-bedroom" role="tabpanel" aria-labelledby="pills-bedroom-tab">

				<h4 class="title">Furnitures</h4>
					<div class="d-flex flex-row justify-content-center align-items-center">
						<p class="mx-2">I have </p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="baby_bed" class="form-control" value="<?= set_value('baby_bed');?>">
						</div>
						<p class="mx-2">Baby Bed, </p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="bed_mattress" class="form-control" value="<?= set_value('bed_mattress');?>">
						</div>
						<p class="mx-2">Bed Mattress, </p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="bunk_bed" class="form-control" value="<?= set_value('bunk_bed');?>">
						</div>
						<p class="mx-2">Bunk Bed, </p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="double_cot_bed_boxed" class="form-control" value="<?= set_value('double_cot_bed_boxed');?>">
						</div>
						<p class="mx-2">Double cot bed - boxed, </p>
					</div>
					<div class="d-flex flex-row justify-content-center align-items-center">
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="double_cot_bed_regular" class="form-control" value="<?= set_value('double_cot_bed_regular');?>">
						</div>
						<p class="mx-2">Double cot bed - regular,</p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="dressing_table" class="form-control" value="<?= set_value('dressing_table');?>">
						</div>
						<p class="mx-2">Dressing Table,</p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="folding_bed" class="form-control" value="<?= set_value('folding_bed');?>">
						</div>
						<p class="mx-2">Folding Bed,</p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="single_cot_bed_regular" class="form-control" value="<?= set_value('single_cot_bed_regular');?>">
						</div>
						<p class="mx-2">Single cot bed - regular,</p>
					</div>
					<div class="d-flex flex-row justify-content-center align-items-center">
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="trolley_bag" class="form-control" value="<?= set_value('trolley_bag');?>">
						</div>
						<p class="mx-2">Trolley Bag,</p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="wardrobe_steel" class="form-control" value="<?= set_value('wardrobe_steel');?>">
						</div>
						<p class="mx-2">Steel Wardrobe,</p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="wardrobe_wood" class="form-control" value="<?= set_value('wardrobe_wood');?>">
						</div>
						<p class="mx-2">Wooden Wardrobe.</p>
					</div>
					<h4 class="title">Electronics</h4>
					<div class="d-flex flex-row justify-content-center align-items-center">
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="air_cooler" class="form-control" value="<?= set_value('air_cooler');?>">
						</div>
						<p class="mx-2">Air Cooler,</p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="split_ac" class="form-control" value="<?= set_value('split_ac');?>">
						</div>
						<p class="mx-2">Split AC,</p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="table_fan" class="form-control" value="<?= set_value('table_fan');?>">
						</div>
						<p class="mx-2">Table Fan, and</p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="window_ac" class="form-control" value="<?= set_value('window_ac');?>">
						</div>
						<p class="mx-2">Window AC.</p>
					</div>

			</div>
			<div class="tab-pane fade" id="pills-kitchen" role="tabpanel" aria-labelledby="pills-kitchen-tab">
				<h4 class="title">Electronics</h4>
					<div class="d-flex flex-row justify-content-center align-items-center">
						<p class="mx-2">I have </p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="coffee_maker" class="form-control" value="<?= set_value('coffee_maker');?>">
						</div>
						<p class="mx-2">Coffee Maker, </p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="dish_washer" class="form-control" value="<?= set_value('dish_washer');?>">
						</div>
						<p class="mx-2">Dish Washer, </p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="mixer_grinder" class="form-control" value="<?= set_value('mixer_grinder');?>">
						</div>
						<p class="mx-2">Mixer Grinder, </p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="oven" class="form-control" value="<?= set_value('oven');?>">
						</div>
						<p class="mx-2">Oven, </p>
					</div>
					<div class="d-flex flex-row justify-content-center align-items-center">
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="refrigerator" class="form-control" value="<?= set_value('refrigerator');?>">
						</div>
						<p class="mx-2">Refrigerator,</p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="water_purifier" class="form-control" value="<?= set_value('water_purifier');?>">
						</div>
						<p class="mx-2">Water Purifier,</p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="utensil_stand" class="form-control" value="<?= set_value('utensil_stand');?>">
						</div>
						<p class="mx-2">Utensils Stand,</p>
					</div>
				<h4 class="title">Others</h4>
					<div class="d-flex flex-row justify-content-center align-items-center">
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="dining_table_4_chairs" class="form-control" value="<?= set_value('dining_table_4_chairs');?>">
						</div>
						<p class="mx-2">Dining Table 4 Chairs,</p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="dining_table_6_chairs" class="form-control" value="<?= set_value('dining_table_6_chairs');?>">
						</div>
						<p class="mx-2">Dining Table 6 Chairs,</p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="gas_cylinder" class="form-control" value="<?= set_value('gas_cylinder');?>">
						</div>
						<p class="mx-2">Gas Cylinder, and</p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="gas_stove" class="form-control" value="<?= set_value('gas_stove');?>">
						</div>
						<p class="mx-2">Gas Stove.</p>
					</div>
			</div>
			<div class="tab-pane fade" id="pills-other" role="tabpanel" aria-labelledby="pills-other-tab">
				<h4 class="title">Miscellaneous</h4>
					<div class="d-flex flex-row justify-content-center align-items-center">
						<p class="mx-2">I have </p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="book_shelf" class="form-control" value="<?= set_value('book_shelf');?>">
						</div>
						<p class="mx-2">Book Shelf, </p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="cross_trainer" class="form-control" value="<?= set_value('cross_trainer');?>">
						</div>
						<p class="mx-2">Cross Trainer, </p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="exercise_cycle" class="form-control" value="<?= set_value('exercise_cycle');?>">
						</div>
						<p class="mx-2">Exercise Cycle, </p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="geyser" class="form-control" value="<?= set_value('geyser');?>">
						</div>
						<p class="mx-2">Geyser, </p>
					</div>
					<div class="d-flex flex-row justify-content-center align-items-center">
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="plastic_drum" class="form-control" value="<?= set_value('plastic_drum');?>">
						</div>
						<p class="mx-2">Plastic Drum,</p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="pooja_temple" class="form-control" value="<?= set_value('pooja_temple');?>">
						</div>
						<p class="mx-2">Pooja Temple,</p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="sewing_machine" class="form-control" value="<?= set_value('sewing_machine');?>">
						</div>
						<p class="mx-2">Sewing Machine,</p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="shoe_rack" class="form-control" value="<?= set_value('shoe_rack');?>">
						</div>
						<p class="mx-2">Show Rack,</p>
					</div>
					<div class="d-flex flex-row justify-content-center align-items-center">
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="treadmill" class="form-control" value="<?= set_value('treadmill');?>">
						</div>
						<p class="mx-2">Treadmill,</p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="vaccuum_cleaner" class="form-control" value="<?= set_value('vaccuum_cleaner');?>">
						</div>
						<p class="mx-2">Vaccuum Cleaner,</p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="washing_machine" class="form-control" value="<?= set_value('washing_machine');?>">
						</div>
						<p class="mx-2">Washing Machine,</p>
					</div>
				<h4 class="title">Boxes</h4>
					<div class="d-flex flex-row justify-content-center align-items-center">
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="book_boxes" class="form-control" value="<?= set_value('book_boxes');?>">
						</div>
						<p class="mx-2">Book Boxes,</p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="cloth_boxes" class="form-control" value="<?= set_value('cloth_boxes');?>">
						</div>
						<p class="mx-2">Cloth Boxes,</p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="kitchen_boxes" class="form-control" value="<?= set_value('kitchen_boxes');?>">
						</div>
						<p class="mx-2">Kitchen Boxes</p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="misc_boxes" class="form-control" value="<?= set_value('misc_boxes');?>">
						</div>
						<p class="mx-2">Misc Boxes.</p>
					</div>
				<h4 class="title">Vehicle</h4>
					<div class="d-flex flex-row justify-content-center align-items-center">
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="bicycle" class="form-control" value="<?= set_value('bicycle');?>">
						</div>
						<p class="mx-2">Bicycle,</p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="bike" class="form-control" value="<?= set_value('bike');?>">
						</div>
						<p class="mx-2">Bike,</p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="gear_bike" class="form-control" value="<?= set_value('gear_bike');?>">
						</div>
						<p class="mx-2">Bike - Geared</p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="car_hatchback" class="form-control" value="<?= set_value('car_hatchback');?>">
						</div>
						<p class="mx-2">Car - Hatchback.</p>
					</div>
					<div class="d-flex flex-row justify-content-center align-items-center">
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="car_sedan" class="form-control" value="<?= set_value('car_sedan');?>">
						</div>
						<p class="mx-2">Car - Sedan,</p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="car_suv" class="form-control" value="<?= set_value('car_suv');?>">
						</div>
						<p class="mx-2">Car - SUV, and</p>
						<div class="form-group w-10 mx-2 text-center">
							<input type="number" min="0" name="moped" class="form-control" value="<?= set_value('moped');?>">
						</div>
						<p class="mx-2">Moped</p>
					</div>
			</div>
		</div>
		<div class="d-flex flex-row justify-content-center align-items-center mt-5">
			<button type="submit" class="btn btn-success btn-raised">Next</button>
		</div>
		<?php echo form_close(); ?>
	</div>
</section>