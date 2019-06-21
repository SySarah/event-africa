<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Categoriefoods Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('categoriefood/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>#</th>
						<th>Name Catfood</th>
						<th>Type Food</th>
						<th>CreateAt</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($categoriefoods as $c){ ?>
                    <tr>
						<td><?php echo $c['id_catfood']; ?></td>
						<td><?php echo $c['name_catfood']; ?></td>
						<td><?php echo $c['type_food']; ?></td>
						<td><?php echo $c['createAt']; ?></td>
						<td>
                            <a href="<?php echo site_url('categoriefood/edit/'.$c['id_catfood']); ?>" class="btn btn-info btn-xs"><span class="fas fa-pencil-alt"></span> Edit</a> 
                            <a href="<?php echo site_url('categoriefood/remove/'.$c['id_catfood']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
