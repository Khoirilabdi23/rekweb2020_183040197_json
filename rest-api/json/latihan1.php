<?php

$mahasiswa = [
    [
        "nama" => "Muhammad Khoiril Abdi",
    "nrp" => "183040197",
    "email" => "abdi.183040197@mail.unpas.ac.id",

    ],
    [
        "nama" => "Eric Doank",
    "nrp" => "183040100",
    "email" => "erik_doank@mail.unpas.ac.id",

    ]
    
];



// $dbh = new PDO('mysql:host=localhost;dbname=phpdasar', 'root', 'root');
// $db = $dbh->prepare('SELECT * FROM mahasiswa');
// $db->execute();
// $mahasiswa = $db->fetchALL(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data

?>