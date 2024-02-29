<?php

//Traccia 1
$users = [
    ['name' => 'Giovanni', 'surname' => 'Ferraro', 'gender' => 'M'],
    ['name' => 'Emanuele', 'surname' => 'Cimino', 'gender' => 'M'],
    ['name' => 'Gabriele', 'surname' => 'Maggio', 'gender' => 'M'],
    ['name' => 'Marco', 'surname' => 'Motolese', 'gender' => 'M'],
    ['name' => 'Alberto', 'surname' => 'Cuteri', 'gender' => 'M'],
    ['name' => 'Alessia', 'surname' => 'Avram', 'gender' => 'F'],
    ['name' => 'Jessica', 'surname' => 'Aldea', 'gender' => 'F'],
];


foreach ($users as $user) {
    $saluto = "Buongiorno";

    if ($user['gender'] === 'M') {
        $saluto .= " Sig. ";
    } elseif ($user['gender'] === 'F') {
        $saluto .= " Sig.ra ";
    }

    echo $saluto . $user['name'] . ' ' . $user['surname'] . "\n";
}

//Traccia 2
$arrayNumerico= [2, 7, 4, 20, 15, 22, 3, 8, 5,17];
$somma = 0;
$conteggio = 0;

for ($i = 0; $i < count($arrayNumerico); $i++) {
  if($arrayNumerico[$i] % 2 == 0){
        $somma += $arrayNumerico[$i];
       $conteggio++;

    }
}


if ($conteggio > 0) {
    $mediaNumeriPari = $somma / $conteggio;
    echo "La media dei numeri pari è: $mediaNumeriPari\n";
}

//traccia 3

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "HACKADEMY\n";
    } elseif ($i % 3 == 0) {
        echo "PHP\n";
    } elseif ($i % 5 == 0) {
        echo "JAVASCRIPT\n";
    } else {
        echo $i . "\n";
    }
}
?>
