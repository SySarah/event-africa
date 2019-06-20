<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Event Add</h3>
            </div>
            <?php echo form_open('event/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="state" value="1"  id="state" />
							<label for="state" class="control-label"><span class="text-danger">*</span>State</label>
							<span class="text-danger"><?php echo form_error('state');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_lieu" class="control-label">Lieux</label>
						<div class="form-group">
							<select name="id_lieu" class="form-control">
								<option value="">select lieux</option>
								<?php 
								foreach($all_lieux as $lieux)
								{
									$selected = ($lieux['id_lieu'] == $this->input->post('id_lieu')) ? ' selected="selected"' : "";

									echo '<option value="'.$lieux['id_lieu'].'" '.$selected.'>'.$lieux['id_lieu'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_sponsor" class="control-label">Sponsor</label>
						<div class="form-group">
							<select name="id_sponsor" class="form-control">
								<option value="">select sponsor</option>
								<?php 
								foreach($all_sponsors as $sponsor)
								{
									$selected = ($sponsor['id_sponsor'] == $this->input->post('id_sponsor')) ? ' selected="selected"' : "";

									echo '<option value="'.$sponsor['id_sponsor'].'" '.$selected.'>'.$sponsor['id_sponsor'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nom_event" class="control-label"><span class="text-danger">*</span>Nom Event</label>
						<div class="form-group">
							<input type="text" name="nom_event" value="<?php echo $this->input->post('nom_event'); ?>" class="form-control" id="nom_event" />
							<span class="text-danger"><?php echo form_error('nom_event');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="description_event" class="control-label"><span class="text-danger">*</span>Description Event</label>
						<div class="form-group">
							<input type="text" name="description_event" value="<?php echo $this->input->post('description_event'); ?>" class="form-control" id="description_event" />
							<span class="text-danger"><?php echo form_error('description_event');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="categorie_event" class="control-label"><span class="text-danger">*</span>Categorie Event</label>
						<div class="form-group">
							<input type="text" name="categorie_event" value="<?php echo $this->input->post('categorie_event'); ?>" class="form-control" id="categorie_event" />
							<span class="text-danger"><?php echo form_error('categorie_event');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_eventdebut" class="control-label"><span class="text-danger">*</span>Date Eventdebut</label>
						<div class="form-group">
							<input type="text" name="date_eventdebut" value="<?php echo $this->input->post('date_eventdebut'); ?>" class="has-datepicker form-control" id="date_eventdebut" />
							<span class="text-danger"><?php echo form_error('date_eventdebut');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="heure_eventdebut" class="control-label"><span class="text-danger">*</span>Heure Eventdebut</label>
						<div class="form-group">
							<input type="text" name="heure_eventdebut" value="<?php echo $this->input->post('heure_eventdebut'); ?>" class="form-control" id="heure_eventdebut" />
							<span class="text-danger"><?php echo form_error('heure_eventdebut');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_eventfin" class="control-label"><span class="text-danger">*</span>Date Eventfin</label>
						<div class="form-group">
							<input type="text" name="date_eventfin" value="<?php echo $this->input->post('date_eventfin'); ?>" class="has-datepicker form-control" id="date_eventfin" />
							<span class="text-danger"><?php echo form_error('date_eventfin');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="heure_eventfin" class="control-label"><span class="text-danger">*</span>Heure Eventfin</label>
						<div class="form-group">
							<input type="text" name="heure_eventfin" value="<?php echo $this->input->post('heure_eventfin'); ?>" class="form-control" id="heure_eventfin" />
							<span class="text-danger"><?php echo form_error('heure_eventfin');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="prix_participation" class="control-label"><span class="text-danger">*</span>Prix Participation</label>
						<div class="form-group">
							<input type="text" name="prix_participation" value="<?php echo $this->input->post('prix_participation'); ?>" class="form-control" id="prix_participation" />
							<span class="text-danger"><?php echo form_error('prix_participation');?></span>
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