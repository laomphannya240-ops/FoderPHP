<?php
$data = [
    [
        'id' => 1,
        'name' => "Phannya",
        'gender' => "Male",
        'age' => 18
    ],
    [
        'id' => 2,
        'name' => "Dara",
        'gender' => "Male",
        'age' => 20
    ],
    [
        'id' => 3,
        'name' => "Sokha",
        'gender' => "Female",
        'age' => 19
    ],
    [
        'id' => 4,
        'name' => "Rina",
        'gender' => "Female",
        'age' => 21
    ],
    [
        'id' => 5,
        'name' => "Vanna",
        'gender' => "Male",
        'age' => 22
    ],
    [
        'id' => 6,
        'name' => "Lina",
        'gender' => "Female",
        'age' => 18
    ],
    [
        'id' => 7,
        'name' => "Sopheak",
        'gender' => "Male",
        'age' => 23
    ],
    [
        'id' => 8,
        'name' => "Mony",
        'gender' => "Female",
        'age' => 20
    ],
    [
        'id' => 9,
        'name' => "Kosal",
        'gender' => "Male",
        'age' => 24
    ],
    [
        'id' => 10,
        'name' => "Nita",
        'gender' => "Female",
        'age' => 19
    ]
];

foreach($data as $d){
    echo $d['name'],"<br>";
}

echo "===========","<br>";
foreach($data as $a){
    foreach($a as $b){
        echo $b,"<br>";
    }
}
?>