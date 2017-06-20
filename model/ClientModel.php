<?php

//Get everything from the client table from database
function getAllClients() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM clients
			JOIN patients ON clients.client_id = patients.patient_id
			JOIN species ON  species.species_id = patients.client_id";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}
//Create a new client in the database
function createClient() 
{
	$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : null;
	$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : null;
	$phone = isset($_POST['phone']) ? $_POST['phone'] : null;
	$email = isset($_POST['email']) ? $_POST['email'] : null;
	
	if (strlen($firstname) == 0 || strlen($lastname) == 0 || strlen($phone) == 0 || strlen($email) == 0) {
		echo "Niet ingevuld";
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO clients(client_firstname, client_lastname, client_phone, client_email) VALUES (:firstname, :lastname, :phone, :email)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':firstname' => $firstname,
		':lastname' => $lastname,
		':phone' => $phone,
		':email' => $email));

	$db = null;
	
	return true;
}
//Edit a client in the database
function editClient() 
{
	$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : null;
	$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : null;
	$phone = isset($_POST['phone']) ? $_POST['phone'] : null;
	$email = isset($_POST['email']) ? $_POST['email'] : null;
	$id = isset($_POST['id']) ? $_POST['id'] : null;
	
	if (strlen($firstname) == 0 || strlen($lastname) == 0 || strlen($phone) == 0 || strlen($email) == 0 || strlen($id) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE clients SET client_firstname = :firstname, client_lastname = :lastname, client_phone = :phone,client_email = :email WHERE client_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':firstname' => $firstname,
		':lastname' => $lastname,
		':phone' => $phone,
		':email' => $email,
		':id' => $id));

	$db = null;
	
	return true;
}
//Get client id from the database

function getClient($id) 
{
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM clients WHERE client_id = :id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));
	$db = null;
	return $query->fetch();
}
//Remove a client from the database
function deleteClient($id = null) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();
	$sql = "DELETE FROM clients WHERE client_id = :id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));
	$db = null;
	
	return true;
}