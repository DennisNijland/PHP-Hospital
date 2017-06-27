<h1>Edit</h1>
	

	<form action="<?= URL ?>patient/editSave" method="POST">
		

		<input type="hidden" name="id" value="<?= $patient['patient_id'] ?>">

		Voornaam: <input type="text" name="patientname" value="<?= $patient['patient_name'] ?>"><br>
		Species ID: <input type="text" name="speciesid" value="<?= $patient['species_id'] ?>"><br>
		Client ID: <input type="text" name="clientid" value="<?= $patient['client_id'] ?>"><br>
		Klacht(en): <input type="text" name="patientstatus" value="<?= $patient['patient_status'] ?>"><br>

		<input type="submit" value="Verzenden">
	</form>

<a href="<?= URL ?>patient/index">Terug naar patient/index</a>