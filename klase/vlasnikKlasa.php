<?php
class Vlasnik
{
    public function __construct()
    {
    }

    public function __destruct()
    {
    }

    public function registracija()
    {
        if (!isset($_POST['username']) || !isset($_POST['password']) || !isset($_POST['ime']) || !isset($_POST['prezime']) || !isset($_POST['kontakt'])) {
            return false;
        }
        if ($_POST['username'] == '' || $_POST['password'] == '' || $_POST['ime'] == '' || $_POST['prezime'] == '' || $_POST['kontakt'] == '') {
            return false;
        }

        $username = $_POST['username'];
        $password = $_POST['password'];
        $ime = $_POST['ime'];
        $prezime = $_POST['prezime'];
        $kontakt = $_POST['kontakt'];

        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['ime'] = $ime;
        $_SESSION['prezime'] = $prezime;
        $_SESSION['kontakt'] = $kontakt;

        include 'konekcija.php';

        $sql = "INSERT INTO vlasnik (username, password, ime, prezime, kontakt) VALUES ('" . $username . "', '" . $password . "', '" . $ime . "', '" . $prezime . "', '" . $kontakt . "')";
        if ($mysqli->query($sql)) {
        } else {
        }
    }

    public function izmena()
    {
        if (!isset($_POST['username']) || !isset($_POST['password']) || !isset($_POST['kontakt'])) {
            return false;
        }
        if ($_POST['username'] == '' || $_POST['password'] == '' || $_POST['kontakt'] == '') {
            return false;
        }

        $username = $_POST['username'];
        $password = $_POST['password'];
        $kontakt = $_POST['kontakt'];

        include 'konekcija.php';

        $sql="UPDATE vlasnik SET kontakt='". $kontakt ."' WHERE username='". $username . "' AND password='" . $password . "'";
        if ($mysqli->query($sql)) {
        } else {
        }
    }

    public function brisanje()
    {
        if (!isset($_POST['username']) || !isset($_POST['password'])) {
            return false;
        }
        if ($_POST['username'] == '' || $_POST['password'] == '') {
            return false;
        }

        $username = $_POST['username'];
        $password = $_POST['password'];

        include 'konekcija.php';

        $sql = "DELETE FROM vlasnik WHERE username='". $username . "' AND password='" . $password . "'";
        if ($mysqli->query($sql)) {
        } else {
        }
    }
}
