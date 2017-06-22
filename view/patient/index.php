<h1>Dit is patient/index</h1>

<table border="1">
		<tr>
			<th>#</th>
			<th>Naam</th>
			<th>Soort</th>
			<th>Klachten</th>
			<th class="action" colspan="2">Actie</th>
		</tr>
		
		<?php foreach ($patients as $patient) { ?>
		<tr>
			<td><?= $patient['patient_id']; ?></td>
			<td><?= $patient['patient_name']; ?></td>
			<td><?= $patient['species_description']; ?></td>
			<td><?= $patient['patient_status']; ?></td>
			<td class="action"><a href="<?= URL ?>patient/edit/<?= $patient['patient_id'] ?>">Edit</a></td>
			<td class="action"><a href="<?= URL ?>patient/delete/<?= $patient['patient_id'] ?>" onclick="return confirm('Weet je zeker dat je deze patient wilt verwijderen?');">Delete</a></td>
		</tr>
		<?php } ?>

	</table>
	<a href="<?= URL ?>client/create">Toevoegen</a>