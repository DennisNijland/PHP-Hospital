<p>Vul alle gegevens van de Client in en klik op "Verzenden"</p>
<form action="<?= URL ?>client/createSave" method="post">
	
		<input type="text" name="firstname" placeholder="Voornaam">
		<input type="text" name="lastname" placeholder="Achternaam">
		<input type="text" name="phone" placeholder="0612345678">
		<input type="text" name="email" placeholder="johndoe@email.com">

		<input type="submit" value="Verzenden">
	
	</form>