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
			<?php
				if ($datareponse){ ?>
					Vous avez déjà répondu à ce message : <br/>
					<b>Date de la réponse</b> : <?php echo $datareponse['datereponse']; ?><br/>
					<b>Objet de la réponse</b> : <?php echo $datareponse['objet']; ?><br/>
					<b>Contenu de la réponse</b> : <?php echo $datareponse['contenu']; ?><br/>
				<?php } else { ?>
					Cette demande à été traitée le <?php echo $data['dateTraitement']; ?> <br/>
					<b>Commentaire</b> : <?php echo $data['commentaireTraitement']; ?><br/>

				<?php } ?>

			
		</div>
	</div>
</div>


<script>
    /*CKEDITOR.replace('contenu', {
		extraPlugins: 'editorplaceholder',
      	editorplaceholder: 'Start typing here...'
	});*/
	CKEDITOR.replace('contenu');
	
</script>