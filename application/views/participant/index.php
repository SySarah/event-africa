<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Participants Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('participant/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Participant</th>
						<th>State</th>
						<th>Id Event</th>
						<th>Nom Participant</th>
						<th>Telephone Participant</th>
						<th>Email Participant</th>
						<th>CreateAt</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($participants as $p){ ?>
                    <tr>
						<td><?php echo $p['id_participant']; ?></td>
						<td><?php echo $p['state']; ?></td>
						<td><?php echo $p['id_event']; ?></td>
						<td><?php echo $p['nom_participant']; ?></td>
						<td><?php echo $p['telephone_participant']; ?></td>
						<td><?php echo $p['email_participant']; ?></td>
						<td><?php echo $p['createAt']; ?></td>
						<td>
                            <a href="<?php echo site_url('participant/edit/'.$p['id_participant']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('participant/remove/'.$p['id_participant']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
