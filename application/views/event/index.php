<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Events Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('event/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Event</th>
						<th>State</th>
						<th>Id Lieu</th>
						<th>Id Sponsor</th>
						<th>Nom Event</th>
						<th>Description Event</th>
						<th>Categorie Event</th>
						<th>Date Eventdebut</th>
						<th>Heure Eventdebut</th>
						<th>Date Eventfin</th>
						<th>Heure Eventfin</th>
						<th>Prix Participation</th>
						<th>CreateAt</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($events as $e){ ?>
                    <tr>
						<td><?php echo $e['id_event']; ?></td>
						<td><?php echo $e['state']; ?></td>
						<td><?php echo $e['id_lieu']; ?></td>
						<td><?php echo $e['id_sponsor']; ?></td>
						<td><?php echo $e['nom_event']; ?></td>
						<td><?php echo $e['description_event']; ?></td>
						<td><?php echo $e['categorie_event']; ?></td>
						<td><?php echo $e['date_eventdebut']; ?></td>
						<td><?php echo $e['heure_eventdebut']; ?></td>
						<td><?php echo $e['date_eventfin']; ?></td>
						<td><?php echo $e['heure_eventfin']; ?></td>
						<td><?php echo $e['prix_participation']; ?></td>
						<td><?php echo $e['createAt']; ?></td>
						<td>
                            <a href="<?php echo site_url('event/edit/'.$e['id_event']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('event/remove/'.$e['id_event']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
