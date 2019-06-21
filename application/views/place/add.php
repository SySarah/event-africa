<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Place Add</h3>
            </div>
            <?php echo form_open('place/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="createAt" class="control-label">CreateAt</label>
						<div class="form-group">
							<input type="text" name="createAt" value="<?php echo $this->input->post('createAt'); ?>" class="has-datetimepicker form-control" id="createAt" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="description_place" class="control-label"><span class="text-danger">*</span>Description Place</label>
						<div class="form-group">
							<input type="text" name="description_place" value="<?php echo $this->input->post('description_place'); ?>" class="form-control" id="description_place" />
							<span class="text-danger"><?php echo form_error('description_place');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="etat_place" class="control-label"><span class="text-danger">*</span>Etat Place</label>
						<div class="form-group">
							<input type="text" name="etat_place" value="<?php echo $this->input->post('etat_place'); ?>" class="form-control" id="etat_place" />
							<span class="text-danger"><?php echo form_error('etat_place');?></span>
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