<h1>Edit</h1>
	

	<form action="<?= URL ?>client/editSave" method="POST">
		

		<input type="hidden" name="id" value="<?= $client['client_id'] ?>">

		Voornaam: <input type="text" name="firstname" value="<?= $client['client_firstname'] ?>"><br>
		Achternaam: <input type="text" name="lastname" value="<?= $client['client_lastname'] ?>"><br>
		Telefoon: <input type="text" name="phone" value="<?= $client['client_phone'] ?>"><br>
		Email: <input type="text" name="email" value="<?= $client['client_email'] ?>"><br>

		<input type="submit" value="Verzenden">
	</form>

<a href="<?= URL ?>client/index">Terug naar client/index</a>