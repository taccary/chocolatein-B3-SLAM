<div class="row">
	<table id="myTable" class="table table-bordered table-striped">
		<thead>
			<th>Identifiant</th>
			<th>Libellé</th>
			<th>Pictogramme</th>
		</thead>
		<tbody>
			<?php
				foreach ($gammes as $row){
					?>
					<tr>
						<td><?= $row['id']; ?></td>
						<td><?= $row['libelle']; ?></td>
						<td><i class="fas fa-<?= $row['picto']; ?>"></i></td>
					</tr>
					<?php
				}
			?>
		</tbody>
	</table>
</div>

<script src="bibliotheques/jquery/jquery.min.js"></script>
<script src="bibliotheques/bootstrap/js/bootstrap.min.js"></script>
<script src="bibliotheques/datatable/jquery.dataTables.min.js"></script>
<script src="bibliotheques/datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>
