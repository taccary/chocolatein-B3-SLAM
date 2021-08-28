<!-- Add New -->
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<center><h4 class="modal-title" id="myModalLabel">Ajouter une actualité</h4></center>
		</div>
		<div class="modal-body">
		
			<form method="POST" action="?action=CRUDActualites" enctype="multipart/form-data">
				<div class="container-fluid">
					<div class="row form-group">
						<div class="col-sm-3">
							<label class="control-label modal-label">titre :</label>
						</div>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="titre" required style="margin-bottom:5%;">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-sm-3">
							<label class="control-label modal-label">contenu :</label>
						</div>
						<div class="col-sm-9">
							<!--<input type="text" class="form-control" name="contenu" required style="margin-bottom:5%;">-->

							<textarea  id="contenu" class="form-control editor" value="1"  name="contenu" rows="5" > </textarea>
						</div>
						
					</div>
					<div class="row form-group">
						<div class="col-sm-3">
							<label class="control-label modal-label">Date de publication :</label>
						</div>
						<div class="col-sm-9">
							<input type="date" class="form-control" name="datePublication" required style="margin-bottom:5%;">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-sm-3">
							<label class="control-label modal-label">en ligne : (0/1)</label>
						</div>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="actif" required style="margin-bottom:5%;">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Annuler</button>
					<button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Enregistrer</a>
				</div>
			</form>
		</div>

	</div>
</div>


<script>
    CKEDITOR.replace('contenu');
</script>