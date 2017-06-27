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

function createPatient() 
{
	$patientname = isset($_POST['patientname']) ? $_POST['patientname'] : null;
	$speciesid = isset($_POST['speciesid']) ? $_POST['speciesid'] : null;
	$clientid = isset($_POST['clientid']) ? $_POST['clientid'] : null;
	$patientstatus = isset($_POST['patientstatus']) ? $_POST['patientstatus'] : null;
	
	if (strlen($patientname) == 0 || strlen($speciesid) == 0 || strlen($clientid) == 0 || strlen($patientstatus) == 0) {
		echo "Niet ingevuld";
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO patients(patient_name, species_id, client_id, patient_status) VALUES (:patientname, :speciesid, :clientid, :patientstatus)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':patientname' => $patientname,
		':speciesid' => $speciesid,
		':clientid' => $clientid,
		':patientstatus' => $patientstatus));

	$db = null;
	
	return true;
}

function getPatient($id) 
{
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM patients WHERE patient_id = :id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));
	$db = null;
	return $query->fetch();
}

function editPatient() 
{
	$patientname = isset($_POST['patientname']) ? $_POST['patientname'] : null;
	$speciesid = isset($_POST['speciesid']) ? $_POST['speciesid'] : null;
	$clientid = isset($_POST['clientid']) ? $_POST['clientid'] : null;
	$patientstatus = isset($_POST['patientstatus']) ? $_POST['patientstatus'] : null;
	$id = isset($_POST['id']) ? $_POST['id'] : null;
	
	if (strlen($patientname) == 0 || strlen($speciesid) == 0 || strlen($clientid) == 0 || strlen($patientstatus) == 0 || strlen($id) == 0) {
		echo "Niet ingevuld";
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE patients SET patient_name = :patientname, species_id = :speciesid, client_id = :clientid,patient_status = :patientstatus WHERE patient_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':patientname' => $patientname,
		':speciesid' => $speciesid,
		':clientid' => $clientid,
		':patientstatus' => $patientstatus,
		':id' => $id));

	$db = null;
	
	return true;
}

