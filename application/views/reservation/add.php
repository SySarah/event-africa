<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Reservation Add</h3>
            </div>
            <?php echo form_open('reservation/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_participant" class="control-label">Participant</label>
						<div class="form-group">
							<select name="id_participant" class="form-control">
								<option value="">select participant</option>
								<?php 
								foreach($all_participants as $participant)
								{
									$selected = ($participant['id_participant'] == $this->input->post('id_participant')) ? ' selected="selected"' : "";

									echo '<option value="'.$participant['id_participant'].'" '.$selected.'>'.$participant['id_participant'].'</option>';
								} 
								?>
							</select>
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