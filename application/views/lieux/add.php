<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Lieux Add</h3>
            </div>
            <?php echo form_open('lieux/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="nom_lieu" class="control-label"><span class="text-danger">*</span>Nom Lieu</label>
						<div class="form-group">
							<input type="text" name="nom_lieu" value="<?php echo $this->input->post('nom_lieu'); ?>" class="form-control" id="nom_lieu" />
							<span class="text-danger"><?php echo form_error('nom_lieu');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="adresse_lieu" class="control-label"><span class="text-danger">*</span>Adresse Lieu</label>
						<div class="form-group">
							<input type="text" name="adresse_lieu" value="<?php echo $this->input->post('adresse_lieu'); ?>" class="form-control" id="adresse_lieu" />
							<span class="text-danger"><?php echo form_error('adresse_lieu');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nbreplace_lieu" class="control-label"><span class="text-danger">*</span>Nbreplace Lieu</label>
						<div class="form-group">
							<input type="text" name="nbreplace_lieu" value="<?php echo $this->input->post('nbreplace_lieu'); ?>" class="form-control" id="nbreplace_lieu" />
							<span class="text-danger"><?php echo form_error('nbreplace_lieu');?></span>
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