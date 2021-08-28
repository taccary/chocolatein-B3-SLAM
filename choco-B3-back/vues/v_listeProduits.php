<?php
/**
 * Vue affichant la liste des produits de toutes les gammes ou d'une gamme donnée
 *
 */
?>

<h1><?= $title ?></h1>

<div class="row">
		<table id="myTable" class="table table-bordered table-striped">
			<thead>
				<th>Nom</th>
				<th>Description</th>
				<th>Packaging</th>
				<th>Image</th>
			</thead>
			<tbody>
            <?php
            foreach ($lesProduits as $row){
                ?>
                <tr>
                    <td><?= $row['nom']; ?></td>
                    <td><?= $row['description']; ?></td>
                    <td><?= $row['packaging']; ?></td>
                    <td><img src="<?= $urlFront; ?><?= substr($row['urlimg'], 1); ?>.jpg" width="100px"/></td>
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