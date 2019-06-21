<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Detailfoods Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('detailfood/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Lieu</th>
						<th>Id Food</th>
						<th>Prix Total</th>
						<th>Qte</th>
						<th>CreateAt</th>
						<th>State</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($detailfoods as $d){ ?>
                    <tr>
						<td><?php echo $d['id_lieu']; ?></td>
						<td><?php echo $d['id_food']; ?></td>
						<td><?php echo $d['prix_total']; ?></td>
						<td><?php echo $d['qte']; ?></td>
						<td><?php echo $d['createAt']; ?></td>
						<td><?php echo $d['state']; ?></td>
						<td>
                            <a href="<?php echo site_url('detailfood/edit/'.$d['id_lieu']); ?>" class="btn btn-info btn-xs"><span class="fas fa-pencil-alt"></span> Edit</a> 
                            <a href="<?php echo site_url('detailfood/remove/'.$d['id_lieu']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
