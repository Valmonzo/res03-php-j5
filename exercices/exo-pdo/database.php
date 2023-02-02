<?php

require './User.php';

$db = new PDO(
    'mysql:host=db.3wa.io;port=3306;dbname=valmontpehautpietri_phpj5',
    'valmontpehautpietri',
    'd39fded3cc68bed8c1489931a2f4de29'
);
$db->exec("SET NAMES 'utf8';");

$user = [
    "firstName" => "Clark",
    "lastName" => "Kent",
    "email" => "clark.kent@test.fr"
];

$newUser = new User($user["firstName"], $user["lastName"], $user["email"]);

$query = $db->prepare('SELECT * FROM users LIMIT 1');
$query->execute();
$users = $query->fetch(PDO::FETCH_ASSOC);

$user2 = new User($users['first_name'], $users['last_name'], $users['email']);

echo "<pre>";
var_dump($user2);
echo "</pre>";

$query = $db->prepare('SELECT * FROM users' );
$query->execute();
$users2 = $query->fetchAll(PDO::FETCH_ASSOC);

$allUsers = [];

for($i = 0 ; $i < count($users2); $i++)
{
    $newUserToPush = new User($users2[$i]['first_name'], $users2[$i]['last_name'], $users2[$i]['email']);
    array_push($allUsers, $newUserToPush);
}

var_dump($allUsers);

 $query = $db->prepare('INSERT INTO users VALUES(null, :first_name, :last_name, :email)');

    $parameters = [
    'first_name' => $newUser->getFirstName(),
    'last_name' => $newUser->getLastName(),
    'email' => $newUser->getEmail()
    ];

    $query->execute($parameters);


?>




