<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Categoriefood Edit</h3>
            </div>
			<?php echo form_open('categoriefood/edit/'.$categoriefood['id_catfood']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="state" value="1" <?php echo ($categoriefood['state']==1 ? 'checked="checked"' : ''); ?> id='state' />
							<label for="state" class="control-label">State</label>
						</div>
					</div>
					<div class="col-md-6">
						<label for="name_catfood" class="control-label"><span class="text-danger">*</span>Name Catfood</label>
						<div class="form-group">
							<input type="text" name="name_catfood" value="<?php echo ($this->input->post('name_catfood') ? $this->input->post('name_catfood') : $categoriefood['name_catfood']); ?>" class="form-control" id="name_catfood" />
							<span class="text-danger"><?php echo form_error('name_catfood');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="type_food" class="control-label"><span class="text-danger">*</span>Type Food</label>
						<div class="form-group">
							<input type="text" name="type_food" value="<?php echo ($this->input->post('type_food') ? $this->input->post('type_food') : $categoriefood['type_food']); ?>" class="form-control" id="type_food" />
							<span class="text-danger"><?php echo form_error('type_food');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="createAt" class="control-label">CreateAt</label>
						<div class="form-group">
							<input type="text" name="createAt" value="<?php echo ($this->input->post('createAt') ? $this->input->post('createAt') : $categoriefood['createAt']); ?>" class="has-datetimepicker form-control" id="createAt" />
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