<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Categorieplace Edit</h3>
            </div>
			<?php echo form_open('categorieplace/edit/'.$categorieplace['id_catplace']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="state" value="1" <?php echo ($categorieplace['state']==1 ? 'checked="checked"' : ''); ?> id='state' />
							<label for="state" class="control-label">State</label>
						</div>
					</div>
					<div class="col-md-6">
						<label for="type_place" class="control-label"><span class="text-danger">*</span>Type Place</label>
						<div class="form-group">
							<input type="text" name="type_place" value="<?php echo ($this->input->post('type_place') ? $this->input->post('type_place') : $categorieplace['type_place']); ?>" class="form-control" id="type_place" />
							<span class="text-danger"><?php echo form_error('type_place');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="prix_place" class="control-label"><span class="text-danger">*</span>Prix Place</label>
						<div class="form-group">
							<input type="text" name="prix_place" value="<?php echo ($this->input->post('prix_place') ? $this->input->post('prix_place') : $categorieplace['prix_place']); ?>" class="form-control" id="prix_place" />
							<span class="text-danger"><?php echo form_error('prix_place');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="createAt" class="control-label">CreateAt</label>
						<div class="form-group">
							<input type="text" name="createAt" value="<?php echo ($this->input->post('createAt') ? $this->input->post('createAt') : $categorieplace['createAt']); ?>" class="has-datetimepicker form-control" id="createAt" />
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