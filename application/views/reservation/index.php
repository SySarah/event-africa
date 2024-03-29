<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Reservations Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('reservation/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>#</th>
						<th>Id Participant</th>
						<th>CreateAt</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($reservations as $r){ ?>
                    <tr>
						<td><?php echo $r['id_reservation']; ?></td>
						<td><?php echo $r['id_participant']; ?></td>
						<td><?php echo $r['createAt']; ?></td>
						<td>
                            <a href="<?php echo site_url('reservation/edit/'.$r['id_reservation']); ?>" class="btn btn-info btn-xs"><span class="fas fa-pencil-alt"></span> Edit</a> 
                            <a href="<?php echo site_url('reservation/remove/'.$r['id_reservation']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
