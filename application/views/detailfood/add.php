<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Detailfood Add</h3>
            </div>
            <?php echo form_open('detailfood/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_food" class="control-label">Food</label>
						<div class="form-group">
							<select name="id_food" class="form-control">
								<option value="">select food</option>
								<?php 
								foreach($all_foods as $food)
								{
									$selected = ($food['id_food'] == $this->input->post('id_food')) ? ' selected="selected"' : "";

									echo '<option value="'.$food['id_food'].'" '.$selected.'>'.$food['id_food'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="prix_total" class="control-label"><span class="text-danger">*</span>Prix Total</label>
						<div class="form-group">
							<input type="text" name="prix_total" value="<?php echo $this->input->post('prix_total'); ?>" class="form-control" id="prix_total" />
							<span class="text-danger"><?php echo form_error('prix_total');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="qte" class="control-label"><span class="text-danger">*</span>Qte</label>
						<div class="form-group">
							<input type="text" name="qte" value="<?php echo $this->input->post('qte'); ?>" class="form-control" id="qte" />
							<span class="text-danger"><?php echo form_error('qte');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="createAt" class="control-label">CreateAt</label>
						<div class="form-group">
							<input type="text" name="createAt" value="<?php echo $this->input->post('createAt'); ?>" class="has-datetimepicker form-control" id="createAt" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="state" class="control-label"><span class="text-danger">*</span>State</label>
						<div class="form-group">
							<input type="text" name="state" value="<?php echo $this->input->post('state'); ?>" class="form-control" id="state" />
							<span class="text-danger"><?php echo form_error('state');?></span>
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