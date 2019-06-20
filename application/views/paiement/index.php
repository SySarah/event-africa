<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Paiements Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('paiement/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Paiement</th>
						<th>State</th>
						<th>Id Reservation</th>
						<th>CreateAt</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($paiements as $p){ ?>
                    <tr>
						<td><?php echo $p['id_paiement']; ?></td>
						<td><?php echo $p['state']; ?></td>
						<td><?php echo $p['id_reservation']; ?></td>
						<td><?php echo $p['createAt']; ?></td>
						<td>
                            <a href="<?php echo site_url('paiement/edit/'.$p['id_paiement']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('paiement/remove/'.$p['id_paiement']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
