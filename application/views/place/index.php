<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Places Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('place/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>#</th>
						<th>CreateAt</th>
						<th>Description Place</th>
						<th>Etat Place</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($places as $p){ ?>
                    <tr>
						<td><?php echo $p['id_place']; ?></td>
						<td><?php echo $p['createAt']; ?></td>
						<td><?php echo $p['description_place']; ?></td>
						<td><?php echo $p['etat_place']; ?></td>
						<td>
                            <a href="<?php echo site_url('place/edit/'.$p['id_place']); ?>" class="btn btn-info btn-xs"><span class="fas fa-pencil-alt"></span> Edit</a> 
                            <a href="<?php echo site_url('place/remove/'.$p['id_place']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
