<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Lieux Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('lieux/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>#</th>
						<th>Nom Lieu</th>
						<th>Adresse Lieu</th>
						<th>Nbreplace Lieu</th>
						<th>CreateAt</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($lieux as $l){ ?>
                    <tr>
						<td><?php echo $l['id_lieu']; ?></td>
						<td><?php echo $l['nom_lieu']; ?></td>
						<td><?php echo $l['adresse_lieu']; ?></td>
						<td><?php echo $l['nbreplace_lieu']; ?></td>
						<td><?php echo $l['createAt']; ?></td>
						<td>
                            <a href="<?php echo site_url('lieux/edit/'.$l['id_lieu']); ?>" class="btn btn-info btn-xs"><span class="fas fa-pencil-alt"></span> Edit</a> 
                            <a href="<?php echo site_url('lieux/remove/'.$l['id_lieu']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
