<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Categoriefood Add</h3>
            </div>
            <?php echo form_open('categoriefood/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="name_catfood" class="control-label"><span class="text-danger">*</span>Name Catfood</label>
						<div class="form-group">
							<input type="text" name="name_catfood" value="<?php echo $this->input->post('name_catfood'); ?>" class="form-control" id="name_catfood" />
							<span class="text-danger"><?php echo form_error('name_catfood');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="type_food" class="control-label"><span class="text-danger">*</span>Type Food</label>
						<div class="form-group">
							<input type="text" name="type_food" value="<?php echo $this->input->post('type_food'); ?>" class="form-control" id="type_food" />
							<span class="text-danger"><?php echo form_error('type_food');?></span>
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