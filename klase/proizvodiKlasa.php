<?php

class Proizvod {
	public function __construct() {
	}	
	
	public function dodavanje()
    {
        // if (!isset($_POST['username']) || !isset($_POST['password']) || !isset($_POST['ime']) || !isset($_POST['prezime']) || !isset($_POST['kontakt'])) {
        //     return false;
        // }
        // if ($_POST['username'] == '' || $_POST['password'] == '' || $_POST['ime'] == '' || $_POST['prezime'] == '' || $_POST['kontakt'] == '') {
        //     return false;
        // }

        $username = $_POST['naziv'];

        // $_SESSION['username'] = $username;
        // $_SESSION['password'] = $password;
        // $_SESSION['ime'] = $ime;
        // $_SESSION['prezime'] = $prezime;
        // $_SESSION['kontakt'] = $kontakt;

        include 'konekcija.php';

        $sql = "INSERT INTO vlasnik (naziv) VALUES ('" . $username . "'')";
        if ($mysqli->query($sql)) {
        } else {
        }
    }
}
