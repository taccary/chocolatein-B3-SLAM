<!-- Edit -->
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<center><h4 class="modal-title" id="myModalLabel">Message de <?php echo $data['personne']; ?> reçu le <?php echo $data['date']; ?></h4></center>
		</div>
		<div class="modal-body">
			<div>
				<b>Statut</b> : <?php echo $data['statut']; ?><br/>
				<b>mail de réponse</b> : <?php echo $data['mail']; ?><br/>
				<b>numéro de téléphone</b> : <?php echo $data['telephone']; ?><br/>
				<b>ville</b> : <?php echo $data['ville']; ?><br/>
				<b>site web</b> : <?php echo $data['site']; ?><br/>
				<b>Message</b> : <?php echo $data['message']; ?><br/>
			</div>
			<hr>

			<form method="POST" action="?action=CRUDMessages">
				<div class="container-fluid">
					<input type="hidden" class="form-control" name="id" value="<?php echo $data['id']; ?>">
					<div class="row form-group">
						<div class="col-sm-3">
							<label class="control-label modal-label">Commentaire sur le traitement de la demande :</label>
						</div>
						<div class="col-sm-9">
							<textarea  id="commentaire" class="form-control editor" value="1"  name="commentaire" rows="5"> </textarea>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Annuler</button>
					<button type="submit" name="done" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Marquer comme traité</button>
				</div>
			</form>





			<!--
			<div id="accordion">
				<div class="card">
					<div class="card-header" id="headingOne">
						<h5 class="mb-0">
							<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							Collapsible Group Item #1
							</button>
						</h5>
					</div>

					<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
						<div class="card-body">
							<form method="POST" action="?action=CRUDMessages">
								<div class="container-fluid">
									<input type="hidden" class="form-control" name="id" value="<?php echo $data['id']; ?>">
									<input type="hidden" class="form-control" name="mail" value="<?php echo $data['mail']; ?>">
									<div class="row form-group">
										<div class="col-sm-3">
											<label class="control-label modal-label">Objet de la réponse :</label>
										</div>
										<div class="col-sm-9">
											<input type="text" class="form-control" name="objet" value="">
										</div>
									</div>
									<div class="row form-group">
										<div class="col-sm-3">
											<label class="control-label modal-label">Contenu de la réponse :</label>
										</div>
										<div class="col-sm-9">
											<textarea  id="contenu" class="form-control editor" value="1"  name="contenu" rows="5"> </textarea>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Annuler</button>
									<button type="submit" name="reply" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Répondre</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingTwo">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							Collapsible Group Item #2
							</button>
						</h5>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						<div class="card-body">
							
						</div>
					</div>
				</div>
			</div>
			-->		
		</div>
	</div>
</div>


<script>
    /*CKEDITOR.replace('contenu', {
		extraPlugins: 'editorplaceholder',
      	editorplaceholder: 'Start typing here...'
	});*/
	CKEDITOR.replace('contenu');
	CKEDITOR.replace('commentaire');

</script>