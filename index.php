<?php

/* PHP Snack 2 */

$matches = [
    0 => [
        'Home_Team' => 'Libertas',
        'Guest_Team' => 'Olimpia',
        'Ht_Score' => 55,
        'Gt_Score' => 44,
    ],
    1 => [
        'Home_Team' => 'Roma',
        'Guest_Team' => 'Livorno',
        'Ht_Score' => 10,
        'Gt_Score' => 60,
    ],
    2 => [
        'Home_Team' => 'Bologna Basket',
        'Guest_Team' => 'Olimpia',
        'Ht_Score' => 30,
        'Gt_Score' => 60,
    ],
    3 => [
        'Home_Team' => 'Pippo Squad',
        'Guest_Team' => 'Topolino Basket',
        'Ht_Score' => 40,
        'Gt_Score' => 38,
    ],
    4 => [
        'Home_Team' => 'RedBoys',
        'Guest_Team' => 'Olimpia',
        'Ht_Score' => 30,
        'Gt_Score' => 50,
    ],
    5 => [
        'Home_Team' => 'Pisa',
        'Guest_Team' => 'Livorno',
        'Ht_Score' => 55,
        'Gt_Score' => 44,
    ],
];
?>

<?php
for ($i = 0; $i < count($matches); ++$i) {
    echo '<p>'.$matches[$i]['Home_Team'].' - '.$matches[$i]['Guest_Team'].' | '.$matches[$i]['Ht_Score'].' - '.$matches[$i]['Gt_Score'].'</p>';
}
?>


<?php

/* PHP Snack 2 */

$email_check = stripos($_GET['email'], '@');

$email_check2 = stripos($_GET['email'], '.');

$name = $_GET['nome'];

$age = $_GET['age'];

if (strlen($name) > 3 && $email_check2 !== false && $email_check !== false) {
    echo 'Accesso Autorizzato';
} else {
    echo 'Accesso Negato';
}

?>

