<!-- Add New -->
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<center><h4 class="modal-title" id="myModalLabel">Ajouter un nouveau Utilisateur</h4></center>
		</div>

		<div class="modal-body">
			<form method="POST" action="?action=CRUDUtilisateurs">
				<div class="container-fluid">
			
					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">Pseudo:</label>
						</div>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="pseudo" required style="margin-bottom:5%;" >
						</div>
						<div class="col-sm-2">
							<label class="control-label modal-label">Email:</label>
						</div>
						<div class="col-sm-10">
							<input type="email" class="form-control" name="email" required style="margin-bottom:5%;">
						</div>
						<div class="col-sm-2">
							<label class="control-label modal-label">Rôle:</label>
						</div>
						<div class="col-sm-10">
							<select name="role" id="role" required style="margin-bottom:5%;">
								<?php
								foreach($roles as $r){?>
										
									<option value="<?php echo $r['IDROLES']; ?>"><?php echo $r['nomRoles']; ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="col-sm-2">
							<label class="control-label modal-label">Mot de passe:</label>
						</div>
						<div class="col-sm-10">
							<input type="password" class="form-control" name="mdp" required style="margin-bottom:5%;">
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