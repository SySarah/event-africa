<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Paiement Edit</h3>
            </div>
			<?php echo form_open('paiement/edit/'.$paiement['id_paiement']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_reservation" class="control-label">Reservation</label>
						<div class="form-group">
							<select name="id_reservation" class="form-control">
								<option value="">select reservation</option>
								<?php 
								foreach($all_reservations as $reservation)
								{
									$selected = ($reservation['id_reservation'] == $paiement['id_reservation']) ? ' selected="selected"' : "";

									echo '<option value="'.$reservation['id_reservation'].'" '.$selected.'>'.$reservation['id_reservation'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="createAt" class="control-label">CreateAt</label>
						<div class="form-group">
							<input type="text" name="createAt" value="<?php echo ($this->input->post('createAt') ? $this->input->post('createAt') : $paiement['createAt']); ?>" class="has-datetimepicker form-control" id="createAt" />
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