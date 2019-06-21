<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Sponsor Add</h3>
            </div>
            <?php echo form_open('sponsor/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="nom_sponsor" class="control-label"><span class="text-danger">*</span>Nom Sponsor</label>
						<div class="form-group">
							<input type="text" name="nom_sponsor" value="<?php echo $this->input->post('nom_sponsor'); ?>" class="form-control" id="nom_sponsor" />
							<span class="text-danger"><?php echo form_error('nom_sponsor');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="logo_sponsor" class="control-label"><span class="text-danger">*</span>Logo Sponsor</label>
						<div class="form-group">
							<input type="text" name="logo_sponsor" value="<?php echo $this->input->post('logo_sponsor'); ?>" class="form-control" id="logo_sponsor" />
							<span class="text-danger"><?php echo form_error('logo_sponsor');?></span>
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