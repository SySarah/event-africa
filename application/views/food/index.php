<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Foods Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('food/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>#</th>
						<th>Id Catfood</th>
						<th>Nom Food</th>
						<th>Prix Food</th>
						<th>CreateAt</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($foods as $f){ ?>
                    <tr>
						<td><?php echo $f['id_food']; ?></td>
						<td><?php echo $f['id_catfood']; ?></td>
						<td><?php echo $f['nom_food']; ?></td>
						<td><?php echo $f['prix_food']; ?></td>
						<td><?php echo $f['createAt']; ?></td>
						<td>
                            <a href="<?php echo site_url('food/edit/'.$f['id_food']); ?>" class="btn btn-info btn-xs"><span class="fas fa-pencil-alt"></span> Edit</a> 
                            <a href="<?php echo site_url('food/remove/'.$f['id_food']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
