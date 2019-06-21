<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Categorieplaces Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('categorieplace/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>#</th>
						<th>Type Place</th>
						<th>Prix Place</th>
						<th>CreateAt</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($categorieplaces as $c){ ?>
                    <tr>
						<td><?php echo $c['id_catplace']; ?></td>
						<td><?php echo $c['type_place']; ?></td>
						<td><?php echo $c['prix_place']; ?></td>
						<td><?php echo $c['createAt']; ?></td>
						<td>
                            <a href="<?php echo site_url('categorieplace/edit/'.$c['id_catplace']); ?>" class="btn btn-info btn-xs"><span class="fas fa-pencil-alt"></span> Edit</a> 
                            <a href="<?php echo site_url('categorieplace/remove/'.$c['id_catplace']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
