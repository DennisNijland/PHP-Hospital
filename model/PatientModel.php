<?php

function getAllPatients() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patients
			JOIN species ON patients.species_id = species.species_id";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}