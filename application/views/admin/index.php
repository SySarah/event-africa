<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Admins Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('admin/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Admin</th>
						<th>Password Admin</th>
						<th>Nom Admin</th>
						<th>Login Admin</th>
						<th>Email Admin</th>
						<th>CreateAt</th>
						<th>State</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($admins as $a){ ?>
                    <tr>
						<td><?php echo $a['id_admin']; ?></td>
						<td><?php echo $a['password_admin']; ?></td>
						<td><?php echo $a['nom_admin']; ?></td>
						<td><?php echo $a['login_admin']; ?></td>
						<td><?php echo $a['email_admin']; ?></td>
						<td><?php echo $a['createAt']; ?></td>
						<td><?php echo $a['state']; ?></td>
						<td>
                            <a href="<?php echo site_url('admin/edit/'.$a['id_admin']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('admin/remove/'.$a['id_admin']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
