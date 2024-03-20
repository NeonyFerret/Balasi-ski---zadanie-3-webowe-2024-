<?php
require_once("User.php");
require_once("Client.php");
require_once("Admin.php");

$users = array();

$u = new Admin('Neon', 'Balasinski', 'Neos');
array_push($users, $u);

$u = new Client('Bartek', 'Lisek', 'FoxyPrince');
$u->setCity('Torun');
$u->setState('kujawsko-pomorskie');
$u->setCountry('Polska');
array_push($users, $u);

$u = new Admin('Vlad', 'Krasucki', 'LevelUp');
array_push($users, $u);

$u = new Client('Hanna', 'Jaavirtanen', 'Mew');
$u->setCity('Turku');
$u->setState('West Seaside');
$u->setCountry('Finnland');
array_push($users, $u);

$u = new Client('Laura', 'Vos', 'Roas');
$u->setCity('Liverpool');
$u->setState('North West');
$u->setCountry('United Kingdom');
array_push($users, $u);

$u = new Client('Zofia', 'Ratajczak', 'Shayell');
$u->setCity('Torun');
$u->setState('kujawsko-pomorskie');
$u->setCountry('Polska');
array_push($users, $u);

foreach($users as $u)
{
    $u->whoAmI();
    if($u->isAdmin() == false)
    {
        echo 'is admin: false' . PHP_EOL;
        $u->location();
    }
    else
    {
        echo 'is admin: true' . PHP_EOL;
    }
    echo PHP_EOL;
}
?>