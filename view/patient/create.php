<p>Vul alle gegevens van de Patient in en klik op "Verzenden"</p>
<form action="<?= URL ?>Patient/createSave" method="post">
	
		<input type="text" name="patientname" placeholder="Naam van de patient">
		<input type="text" name="speciesid" placeholder="Species ID">
		<input type="text" name="clientid" placeholder="clientid">
		<input type="text" name="patientstatus" placeholder="Klacht van het dier">

		<input type="submit" value="Verzenden">
	
	</form>