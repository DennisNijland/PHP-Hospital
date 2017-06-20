<h1>Dit zijn de clienten.</h1>

<table border="1">
		<tr>
			<th>#</th>
			<th>Voornaam</th>
			<th>Achternaam</th>
			<th>Telefoon</th>
			<th>E-mail</th>
			<th>Patient</th>
			<th>Species</th>
			<th>Patient klachten</th>
			<th class="action" colspan="2">Actie</th>
		</tr>
		
		<?php foreach ($clients as $client) { ?>
		<tr>
			<td><?= $client['client_id']; ?></td>
			<td><?= $client['client_firstname']; ?></td>
			<td><?= $client['client_lastname']; ?></td>
			<td><?= $client['client_phone']; ?></td>
			<td><?= $client['client_email']; ?></td>
			<td><?= $client['patient_name']; ?></td>
			<td><?= $client['species_description']; ?></td>
			<td><?= $client['patient_status']; ?></td>
			<td class="action"><a href="<?= URL ?>client/edit/<?= $client['client_id'] ?>">Edit</a></td>
			<td class="action"><a href="<?= URL ?>client/delete/<?= $client['client_id'] ?>" onclick="return confirm('Weet je zeker dat je deze client wilt verwijderen?');">Delete</a></td>
		</tr>
		<?php } ?>

	</table>
	<a href="<?= URL ?>client/create">Toevoegen</a>