<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Food Add</h3>
            </div>
            <?php echo form_open('food/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="state" value="1"  id="state" />
							<label for="state" class="control-label">State</label>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_catfood" class="control-label">Food</label>
						<div class="form-group">
							<select name="id_catfood" class="form-control">
								<option value="">select food</option>
								<?php 
								foreach($all_foods as $food)
								{
									$selected = ($food['id_food'] == $this->input->post('id_catfood')) ? ' selected="selected"' : "";

									echo '<option value="'.$food['id_food'].'" '.$selected.'>'.$food['id_catfood'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nom_food" class="control-label"><span class="text-danger">*</span>Nom Food</label>
						<div class="form-group">
							<input type="text" name="nom_food" value="<?php echo $this->input->post('nom_food'); ?>" class="form-control" id="nom_food" />
							<span class="text-danger"><?php echo form_error('nom_food');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="prix_food" class="control-label"><span class="text-danger">*</span>Prix Food</label>
						<div class="form-group">
							<input type="text" name="prix_food" value="<?php echo $this->input->post('prix_food'); ?>" class="form-control" id="prix_food" />
							<span class="text-danger"><?php echo form_error('prix_food');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="createAt" class="control-label">CreateAt</label>
						<div class="form-group">
							<input type="text" name="createAt" value="<?php echo $this->input->post('createAt'); ?>" class="has-datetimepicker form-control" id="createAt" />
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>