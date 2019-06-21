<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Participant Edit</h3>
            </div>
			<?php echo form_open('participant/edit/'.$participant['id_participant']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_event" class="control-label">Event</label>
						<div class="form-group">
							<select name="id_event" class="form-control">
								<option value="">select event</option>
								<?php 
								foreach($all_events as $event)
								{
									$selected = ($event['id_event'] == $participant['id_event']) ? ' selected="selected"' : "";

									echo '<option value="'.$event['id_event'].'" '.$selected.'>'.$event['id_event'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nom_participant" class="control-label"><span class="text-danger">*</span>Nom Participant</label>
						<div class="form-group">
							<input type="text" name="nom_participant" value="<?php echo ($this->input->post('nom_participant') ? $this->input->post('nom_participant') : $participant['nom_participant']); ?>" class="form-control" id="nom_participant" />
							<span class="text-danger"><?php echo form_error('nom_participant');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="telephone_participant" class="control-label"><span class="text-danger">*</span>Telephone Participant</label>
						<div class="form-group">
							<input type="text" name="telephone_participant" value="<?php echo ($this->input->post('telephone_participant') ? $this->input->post('telephone_participant') : $participant['telephone_participant']); ?>" class="form-control" id="telephone_participant" />
							<span class="text-danger"><?php echo form_error('telephone_participant');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email_participant" class="control-label"><span class="text-danger">*</span>Email Participant</label>
						<div class="form-group">
							<input type="text" name="email_participant" value="<?php echo ($this->input->post('email_participant') ? $this->input->post('email_participant') : $participant['email_participant']); ?>" class="form-control" id="email_participant" />
							<span class="text-danger"><?php echo form_error('email_participant');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="createAt" class="control-label">CreateAt</label>
						<div class="form-group">
							<input type="text" name="createAt" value="<?php echo ($this->input->post('createAt') ? $this->input->post('createAt') : $participant['createAt']); ?>" class="has-datetimepicker form-control" id="createAt" />
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