<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Admin Edit</h3>
            </div>
			<?php echo form_open('admin/edit/'.$admin['id_admin']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="password_admin" class="control-label"><span class="text-danger">*</span>Password Admin</label>
						<div class="form-group">
							<input type="text" name="password_admin" value="<?php echo ($this->input->post('password_admin') ? $this->input->post('password_admin') : $admin['password_admin']); ?>" class="form-control" id="password_admin" />
							<span class="text-danger"><?php echo form_error('password_admin');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nom_admin" class="control-label"><span class="text-danger">*</span>Nom Admin</label>
						<div class="form-group">
							<input type="text" name="nom_admin" value="<?php echo ($this->input->post('nom_admin') ? $this->input->post('nom_admin') : $admin['nom_admin']); ?>" class="form-control" id="nom_admin" />
							<span class="text-danger"><?php echo form_error('nom_admin');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="login_admin" class="control-label"><span class="text-danger">*</span>Login Admin</label>
						<div class="form-group">
							<input type="text" name="login_admin" value="<?php echo ($this->input->post('login_admin') ? $this->input->post('login_admin') : $admin['login_admin']); ?>" class="form-control" id="login_admin" />
							<span class="text-danger"><?php echo form_error('login_admin');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email_admin" class="control-label"><span class="text-danger">*</span>Email Admin</label>
						<div class="form-group">
							<input type="text" name="email_admin" value="<?php echo ($this->input->post('email_admin') ? $this->input->post('email_admin') : $admin['email_admin']); ?>" class="form-control" id="email_admin" />
							<span class="text-danger"><?php echo form_error('email_admin');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="createAt" class="control-label">CreateAt</label>
						<div class="form-group">
							<input type="text" name="createAt" value="<?php echo ($this->input->post('createAt') ? $this->input->post('createAt') : $admin['createAt']); ?>" class="has-datetimepicker form-control" id="createAt" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="state" class="control-label"><span class="text-danger">*</span>State</label>
						<div class="form-group">
							<input type="text" name="state" value="<?php echo ($this->input->post('state') ? $this->input->post('state') : $admin['state']); ?>" class="form-control" id="state" />
							<span class="text-danger"><?php echo form_error('state');?></span>
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