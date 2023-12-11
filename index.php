<?php



// esercizio 1

$x = [1, 4, 6, 7, 12, 24, 16];
$numeri_Pari = Trova_Numeri_Pari($x);

$somma = 0;
$conteggio = 0;

function Trova_Numeri_Pari($array) {
    $numeri_Pari = [];

    foreach ($array as $numero) {
        if ($numero % 2 == 0) {
            $numeri_Pari[] = $numero;
        }
    }

    return $numeri_Pari;
}

foreach ($numeri_Pari as $numero) {
    $somma += $numero;
    $conteggio++;
}

$media = $somma / $conteggio;

echo "La media dei numeri pari è: $media \n";




// esercizio 2

$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M'],
    ['name' => 'Maria', 'surname' => 'Tortora', 'gender' => 'F'],
    ['name' => 'Luigi', 'surname' => 'Idraulico', 'gender' => 'M'],
    ['name' => 'Paperon', 'surname' => 'De_Paperoni', 'gender' => 'F'],
    ['name' => 'Dracula', 'surname' => 'Meglio_non_sapere', 'gender' => 'M'],
    ['name' => 'Cesira', 'surname' => 'Pollo', 'gender' => 'X'],
];

foreach ($users as $user) {
    $saluto = '';

    if ($user['gender'] == 'M') {
        $saluto = "Buongiorno Sig. {$user['name']} {$user['surname']}";
    } elseif ($user['gender'] == 'F') {
        $saluto = "Buongiorno Sig.ra {$user['name']} {$user['surname']}";
    } else {
        $saluto = "Buongiorno {$user['name']} {$user['surname']}";
    }

    echo $saluto . "\n";
}




// esercizio 3
// 100 so tanti ne metto meno

for ($i = 1; $i <= 20; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "HACKADEMY114";
    } elseif ($i % 3 == 0) {
        echo "PHP";
    } elseif ($i % 5 == 0) {
        echo "JAVASCRIPT";
    } else {
        echo $i;
    }

    echo "\n";
}

?>